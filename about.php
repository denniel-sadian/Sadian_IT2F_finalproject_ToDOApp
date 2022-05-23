<?php
require('utils/saver.php');
session_start();
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
    <title>ToDO App - About Us</title>
</head>
<body>
    <?php include_once('components/navbar.php'); ?>

    <div class="cont-occupy">
        <div class="main">
            <header>
                <div>
                    <h1 class="glow">About Our ToDo App</h1>
                </div>
            </header>
            <article class="todo-cont" id="todos">
                <div style="padding-top: 60px;">
                    <div class="index-grid" style="grid-template-columns: 55% 45%; grid-template-areas: 'text icon';">
                        <div class="text" style="text-align: right;">
                            The ToDO App is a final project for the subject Integrative Programming and Technologies.
                            Our team: Ms. Rey, Ms. Rejano, and Mr. Sadian, used the programming language PHP in developing
                            this project. We didn't use a ready-made HTML template, we wrote the design by ourselves.
                        </div>
                        <div class="center">
                            <i class="w3-text-green fa fa-file-code-o"></i>
                        </div>
                    </div>
                    <div class="index-grid" style="grid-template-columns: 45% 55%; grid-template-areas: 'icon text';">
                        <div class="center">
                            <i class="w3-text-red fa fa-heart-o"></i>
                        </div>
                        <div class="text">
                            Our ToDO App was inspired by the best todo apps online. Todoist 
                            combines a minimalist interface with powerful tagging and natural language processing features.
                            TickTick is quite similar to Todoist, with a nearly identical interface. It does offer some features
                            that Todoist lacks, such as a built-in Pomodoro timer and calendar view.
                            Google Tasks is a no-frills to-do list app that works perfectly with other Google apps (particularly
                            Gmail and Google Calendar).
                        </div>
                    </div>
                    <hr>
                    <div class="team">
                        <h1>Meet our team</h1>
                        <?php
                        $id = 0;
                        foreach (get_devs() as $dev) {
                            ?>
                            <div>
                                <img src="<?php echo $dev->pic; ?>">
                                <a class="glow" href="dev.php?id=<?php echo $id; ?>"><?php echo $dev->name; ?></a>
                            </div>
                            <?php
                            $id++;
                        }
                        ?>
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
