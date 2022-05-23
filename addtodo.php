<?php
require('utils/saver.php');
session_start();

if (isset($_POST['what']) && session_is_valid() && strlen($_POST['what']) > 0) {
    add_todo($_POST['what']);
}
header('Location: list.php#todos');
?>