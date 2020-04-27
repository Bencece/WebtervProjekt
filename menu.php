<nav class="menu" id="menu">
    <ul>
        <li><a href='index.php' <?php echo setActive("index.php"); ?>>Főoldal</a></li>
        <li><a href='pizza.php' <?php echo setActive("pizza.php"); ?>>Pizzáink</a></li>
        <li><a href='prices.php' <?php echo setActive("prices.php"); ?>>Áraink</a></li>
        <li><a href='contact.php' <?php echo setActive("contact.php"); ?>>Elérhetőség</a></li>
        <?php
            if(isset($_SESSION["user"])){
                echo "<li><a href='cart.php'";
                echo setActive("cart.php"); 
                echo ">Kosár <span id='cartSpan'>".count($_SESSION["cart"])."</span></a></li>";
                echo "
                <li><form method='post' action='index.php'>
                    <input type='hidden' name='logout'>
                    <button type='submit' class='logoutButton'>Kijelentkezés</button>
                </form></li>
                ";
            } else {
                echo "<li id='loginButton'><a href='login.php' ";
                echo setActive('login.php');
                echo ">Bejelentkezés</a></li>";
            }
            function setActive($page){
                if ($page == basename($_SERVER['PHP_SELF'])){
                    return " class='active'";
                }
                return "";
            }
        ?>
    </ul>
</nav>