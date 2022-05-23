<?php
require('utils/saver.php');
session_start();

if (session_is_valid()) {
    if (isset($_GET['delete']) && isset($_GET['id'])) {
        delete_todo($_GET['id']);
    } elseif (isset($_GET['done']) && isset($_GET['id'])) {
        toggle_done($_GET['id']);
    }
}
header('Location: list.php#todos');
?>