<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Pizzáink</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include "meta.php"; ?>
  </head>
  <body>
    <div class="header">
			<!--Logo -->
	 <div class="pepeholder">
		<a href="index.php">
			<img src="img\pepelogo2.png" align=left width="105px">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
      <?php include "menu.php"; ?>
    </div>
    <div class="content">
        <div class="pizzaBox">
            <img src="img\margherita.jpg"/>
            <p>Margherita pizza</p>
            <button>Kosárba</button>
        </div>
        <div class="pizzaBox">
            <img src="img\prosciutto.jpg"/>
            <p>Prosciutto pizza</p>
            <button>Kosárba</button>
        </div>
        <div class="pizzaBox">
            <img src="img\pepperoni.jpg"/>
            <p>Pepperoni pizza</p>
            <button>Kosárba</button>
        </div>
    </div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
