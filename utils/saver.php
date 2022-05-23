<?php

function save($file) {
    $dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($file->asXML());
	$dom->save('data/users.xml');
}


function does_user_exist($username) {
    $file = simplexml_load_file('data/users.xml');
    if (count($file->user) > 0) {
        foreach ($file->user as $user) {
            if ($user['username'] == $username) {
                return true;            
            }
        }
    }
    return false;
}


function try_login($username, $password) {
    if (does_user_exist($username)) {
        $file = simplexml_load_file('data/users.xml');
        foreach ($file->user as $user) {
            if ($user['password'] == base64_encode($password) && $user['username'] == $username) {
                $_SESSION['username'] = strval($user['username']);
                $_SESSION['name'] = strval($user->name);
                return true;
            }
        }
    }
    return false;
}


function add_user($name, $username, $password) {
    if (!does_user_exist($username)) {
        $file = simplexml_load_file('data/users.xml');
        $new_user = $file->addChild('user');
        $new_user->addAttribute('username', $username);
        $new_user->addAttribute('password', base64_encode($password));
        $new_user->addChild('name', $name);
        $new_user->addChild('list');
        save($file);
        try_login($username, $password);
        return true;
    } else {
        return false;
    }
}


function get_user_from_loaded_file($file, $username) {
    foreach ($file->user as $user) {
        if ($user['username'] == $username) {
            return $user;
        }
    }
}


function session_is_valid() {
    return isset($_SESSION['username']) && does_user_exist($_SESSION['username']);
}


function get_todos() {
    if (session_is_valid()) {
        $file = simplexml_load_file('data/users.xml');
        return get_user_from_loaded_file($file, $_SESSION['username'])->list->todo;
    }
    return array();
}


function get_devs() {
    $file = simplexml_load_file('data/devs.xml');
    return $file->dev;
}


function add_todo($what) {
    if (session_is_valid()) {
        $file = simplexml_load_file('data/users.xml');
        $todo = get_user_from_loaded_file($file, $_SESSION['username'])->list->addChild('todo');
        $todo->addAttribute('id', floor(microtime(true) * 1000));
        $todo->addChild('what', $what);
        $todo->addChild('done', 0);
        save($file);
    }
}


function delete_todo($id) {
    if (session_is_valid()) {
        $file = simplexml_load_file('data/users.xml');
        $todos = get_user_from_loaded_file($file, $_SESSION['username'])->list->todo;
        $index = 0;
	    $i = 0;
	    foreach ($todos as $todo) {
	    	if($todo['id'] == $id){
	    		$index = $i;
	    		break;
	    	}
	    	$i++;
	    }
        unset($todos[$index]);
        save($file);
    }
}


function toggle_done($id) {
    if (session_is_valid()) {
        $file = simplexml_load_file('data/users.xml');
        $todos = get_user_from_loaded_file($file, $_SESSION['username'])->list->todo;
        $index = 0;
	    $i = 0;
        foreach ($todos as $todo) {
	    	if($todo['id'] == $id){
	    		$index = $i;
	    		break;
	    	}
	    	$i++;
	    }
        $todos[$index]->done = $todos[$index]->done == 0 ? 1 : 0;
        save($file);
    }
}

?>