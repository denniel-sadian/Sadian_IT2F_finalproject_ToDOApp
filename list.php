<?php
require('utils/saver.php');
session_start();

if (!session_is_valid()) {
    header('Location: index.php');
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
    <title>ToDO APP - List</title>
</head>
<body>
    <?php include_once('components/navbar.php'); ?>

    <div class="cont-occupy">
        <div class="main">
            <header>
                <div>
                    <h1 class="glow">Welcome, <?php echo $_SESSION['name']; ?>!</h1>
                </div>
            </header>
            <article class="todo-cont" id="todos">
                <div>
                    <h3 class="w3-text-white">Here is your list</h3>
                    <form action="addtodo.php" method="POST" class="adder">
                        <input type="text" name="what" class="w3-input" placeholder="What should you do?" required>
                        <button type="submit" class="w3-btn w3-green">Add</button>
                    </form>
                    <?php
                    foreach (get_todos() as $todo) {
                        ?>
                        <div class="todo <?php echo $todo->done == 1 ? 'done' : ''; ?>">
                            <div class="content">
                                <span><?php echo $todo->what ?></span>
                            </div>
                            <div class="controls">
                                <a href="edit.php?done&id=<?php echo $todo['id'] ?>"><i class="fa fa-check-circle"></i></a>
                                <a href="edit.php?delete&id=<?php echo $todo['id'] ?>"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if (count(get_todos()) == 0) {
                        ?>
                        <p style="text-align: center; color: white" class="w3-large">Your list is empty.</p>
                        <?php
                    }
                    ?>
                </div>
            </article>
        </div>
        <footer>
            <?php include_once('components/footer.php'); ?>
        </footer>
    </div>

</body>
</html>