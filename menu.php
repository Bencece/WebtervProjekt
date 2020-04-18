<nav class="menu" id="menu">
    <ul>
        <li><a href="index.php" class="active">Főoldal</a></li>
        <li><a href="pizza.php">Pizzáink</a></li>
        <li><a href="cart.php">Kosár</a></li>
        <li><a href="prices.php">Áraink</a></li>
        <li><a href="contact.php">Elérhetőség</a></li>
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
        ?>
    </ul>
</nav>