<nav class="menu" id="menu">
    <ul>
        <li><a href="index.php" <?php echo setActive("index.php"); ?>>Főoldal</a></li>
        <li><a href="pizza.php" <?php echo setActive("pizza.php"); ?>>Pizzáink</a></li>
        <li><a href="cart.php" <?php echo setActive("cart.php"); ?>>Kosár</a></li>
        <li><a href="prices.php" <?php echo setActive("prices.php"); ?>>Áraink</a></li>
        <li><a href="contact.php" <?php echo setActive("contact.php"); ?>>Elérhetőség</a></li>
        <?php
            if(isset($_SESSION["user"])){
                echo "
                <form method='post' action='index.php'>
                    <input type='hidden' name='logout'>
                    <li><button type='submit' class='logoutButton'>Kijelentkezés</button></li>
                </form>
                ";
            } else {
                echo "<li id='loginButton'><a href='login.php'>Bejelentkezés</a></li>";
            }
            function setActive($page){
                if ($page == basename($_SERVER['PHP_SELF'])){
                    return "class='active'";
                }
                return "";
            }
        ?>
    </ul>
</nav>