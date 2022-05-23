<div id="nav" class="navcont">
    <nav>
        <div class="brand"><a href="index.php">ToDO App</a></div>
        <div class="links">
            <div><a href="contact.php">Contact</a></div>
            <div><a href="about.php">About</a></div>
            <?php
                if (session_is_valid()) {
                    ?><div><a href="logout.php">Logout</a></div><?php
                } else {
                    ?>
                    <div><a href="login.php">Login</a></div>
                    <div><a href="signup.php">Sign-up</a></div>
                    <?php
                }
            ?>
        </div>
    </nav>
    <script>
        var nav = document.getElementById("nav");
        document.onscroll = function () {
            if (document.documentElement.scrollTop > nav.scrollHeight) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        }
    </script>
</div>