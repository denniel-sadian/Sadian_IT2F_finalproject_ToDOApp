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
    <title>ToDO App - Contact Us</title>
</head>
<body>
    <?php include_once('components/navbar.php'); ?>

    <div class="cont-occupy">
        <div class="main">
            <header>
                <div>
                    <h1 class="glow">Contact Us</h1>
                </div>
            </header>
            <article class="todo-cont" id="todos">
                <div style="padding-top: 60px;">
                    <div class="index-grid" style="grid-template-columns: 55% 45%; grid-template-areas: 'text icon';">
                        <?php
                        $dev = get_devs()[0];
                        ?>
                        <div class="text" style="text-align: right;">
                            <p><?php echo $dev->name; ?><br><?php echo $dev->email; ?><br><?php echo $dev->phone; ?></p>
                        </div>
                        <div class="center">
                            <img src="<?php echo $dev->pic; ?>">
                        </div>
                        <?php
                        ?>
                    </div>
                    <div class="index-grid" style="grid-template-columns: 55% 45%; grid-template-areas: 'text icon';">
                        <?php
                        $dev = get_devs()[1];
                        ?>
                        <div class="center">
                            <img src="<?php echo $dev->pic; ?>">
                        </div>
                        <div class="text" style="text-align: right;">
                            <p><?php echo $dev->name; ?><br><?php echo $dev->email; ?><br><?php echo $dev->phone; ?></p>
                        </div>
                        <?php
                        ?>
                    </div>
                    <div class="index-grid" style="grid-template-columns: 55% 45%; grid-template-areas: 'text icon';">
                        <?php
                        $dev = get_devs()[2];
                        ?>
                        <div class="text" style="text-align: right;">
                            <p><?php echo $dev->name; ?><br><?php echo $dev->email; ?><br><?php echo $dev->phone; ?></p>
                        </div>
                        <div class="center">
                            <img src="<?php echo $dev->pic; ?>">
                        </div>
                        <?php
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
