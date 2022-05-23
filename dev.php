<?php
require('utils/saver.php');
session_start();

if (!isset($_GET['id'])) {
    header('Location: about.php');
}

$dev = get_devs()[$_GET['id'] + 0];
$to_display;
if (isset($_GET['ambition'])) $to_display = $dev->ambition->p;
elseif (isset($_GET['it'])) $to_display = $dev->whyit->p;
else $to_display = $dev->about->p;
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
    <title>ToDO App - <?php echo $dev->name; ?></title>
    <style>
        header > div {
            flex-direction: column;
            height: unset;
            padding-top: 40px;
        }
        header > div > img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 100%;
        }
    </style>
</head>
<body>
    <?php include_once('components/navbar.php'); ?>

    <div class="cont-occupy">
        <div class="main">
            <header>
                <div>
                    <img src="<?php echo $dev->pic; ?>">
                    <?php
                    if (isset($_GET['ambition'])) {
                        ?><h1 class="glow">Ambition of <?php echo $dev->name; ?></h1><?php
                    }
                    elseif (isset($_GET['it'])) {
                        ?><h1 class="glow">Why did <?php echo $dev->name; ?> choose IT?</h1><?php
                    }
                    else {
                        ?><h1 class="glow">About <?php echo $dev->name; ?></h1><?php
                    }
                    ?>
                </div>
            </header>
            <article class="todo-cont" id="todos">
                <div class="about-dev">
                    <?php
                    foreach ($to_display as $p) {
                        ?>
                        <p><?php echo $p; ?></p>
                        <?php
                    }
                    ?>
                    <p><a href="dev.php?id=<?php echo $_GET['id']; ?>">My Introduction...</a></p>
                    <p><a href="dev.php?id=<?php echo $_GET['id']; ?>&ambition">My Ambition...</a></p>
                    <p><a href="dev.php?id=<?php echo $_GET['id']; ?>&it">Why I Chose IT...</a></p>
                </div>
            </article>
        </div>
        <footer>
            <?php include_once('components/footer.php'); ?>
        </footer>
    </div>

</body>
</html>
