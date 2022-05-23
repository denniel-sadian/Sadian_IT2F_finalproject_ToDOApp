<?php
require('utils/saver.php');
session_start();

// Check if creds are complete
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name'])) {
    
    // Try to sign-up
    if (add_user($_POST['name'], $_POST['username'], $_POST['password'])) {
        header('Location: index.php');
    } else {
        header('Location: ?error');
    }

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Nunito:wght@300&family=Square+Peg&display=swap" rel="stylesheet">
    <title>ToDO App - Sign-up</title>
</head>
<body>
    <?php include_once('components/navbar.php'); ?>
    
    <div class="main-cont and-center">
        <form method="POST" class="w3-card w3-animate-opacity real-form">
            <h2><i class="fa fa-sign-in"></i> Sign-up to our ToDo App</h2>
            <hr>

            <?php
            // Incorrect username
            if (isset($_GET['error'])) {
                echo '<div class="w3-text-red">Please choose another username.</div>';
            }
            ?>

            <div class="input-box">
                <label for="username">Name:</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="input-box">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-box">
                <label for="username">Password:</label>
                <input type="password" name="password" required>
            </div>

            <div class="input-box">
                <button type="submit" class="w3-btn w3-green">Sign-up</button>
            </div>

            <div class="divider">
                <hr>
                <span>Or</span>
                <hr>
            </div>

            <div class="input-box" style="margin-top: 0;">
                <a href="login.php" class="w3-btn w3-blue">Login</a>
            </div>
    
        </form>
    </div>
    
</body>
</html>