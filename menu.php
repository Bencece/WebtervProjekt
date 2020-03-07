<nav class="menu">
    <ul>
        <li><a href="index.php" <?php print(activateIt("/WebtervProjekt/index.php")); ?>>Főoldal</a></li>
        <li><a href="pizza.php" <?php print(activateIt("/WebtervProjekt/pizza.php")); ?>>Pizzáink</a></li>
        <li><a href="cart.php" <?php print(activateIt("/WebtervProjekt/cart.php")); ?>>Kosár</a></li>
        <li><a href="prices.php" <?php print(activateIt("/WebtervProjekt/prices.php")); ?>>Áraink</a></li>
        <li><a href="contact.php" <?php print(activateIt("/WebtervProjekt/contact.php")); ?>>Elérhetőség</a></li>
        <li id="loginButton"><a href="login.php">Bejelentkezés</a></li>
    </ul>
</nav>
<?php
    function activateIt($oldal){
        if($_SERVER['SCRIPT_NAME'] == $oldal){
            return "style='background-color: darkgray';";
        }
    }
?>