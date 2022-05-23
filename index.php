<?php
require('utils/saver.php');
session_start();

if (session_is_valid()) {
    header('Location: list.php');
}
?>

<!DOCTYPE html>
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
    <title>ToDO App - Welcome</title>
</head>
<body>
    <?php include_once('components/navbar.php'); ?>

    <div class="cont-occupy">
        <div class="main">
            <header>
                <div>
                    <h1 class="glow">Welcome to our ToDO App!</h1>
                </div>
            </header>
            <article class="todo-cont" id="todos">
                <div style="padding-top: 60px;">
                    <div class="index-grid" style="grid-template-columns: 45% 55%; grid-template-areas: 'icon text';">
                        <div class="center">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="text">
                            It lets you make large and overwhelming projects manageable. Also, you get more done by focusing on high-value activities. Once you have a list of things you need to-do, it's much easier to prioritize the tasks on it. This will ensure you're always working on the right things.
                        </div>
                    </div>
                    <div class="index-grid" style="grid-template-columns: 55% 45%; grid-template-areas: 'text icon';">
                        <div class="text" style="text-align: right;">
                            Improves your memory: A to do list acts as an external memory aid. Increases productivity: A to do list allows you to prioritize the tasks that are more important. Helps with motivation: To do lists are a great motivational tool because you can use them to clarify your goals.
                        </div>
                        <div class="center">
                            <i class="fa fa-check-circle"></i>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <footer>
            <?php include_once('components/footer.php'); ?>
        </footer>
    </div>

</body>
</html>