<?php include_once("header.php"); ?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Pizzáink</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="print" href="print.css">
    <!-- Viewport beillesztése -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  </head>
  <body>
    <div class="header">
			<!--Logo -->
	 <div class="pepeholder">
		<a href="index.php">
			<img class="pepe" title="Pepe Pizzéria" src="img\pepelogo2.png" width="105px">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
	  <?php
      include_once("loginchecked.php");
      if (isset($_SESSION["user"]) && isset($_POST["pizza"])){
        array_push($_SESSION["cart"], [ "id" => $_SESSION["pizzaID"], "name" => $_POST["pizza"], "prize" => $_POST["prize"], "toppings" => [] ]);
        $_SESSION["pizzaID"]++;
      }
    ?>
    </div>
    <div class="contentBody">
      <!-- A menu beillesztése -->
      <?php include_once("menu.php"); ?>
      <div class="content">
          <div class="pizzaBox">
            <form method="post" action="pizza.php">
              <img src="img\margherita.jpg"/>
              <p><a href="info.php?pizza=0">Margherita pizza <img class="infoIcon" src="img/info.png"></a></p>
              <input type="hidden" name="pizza" value="Margherita pizza">
              <input type="hidden" name="prize" value="1200">
              <button type="submit" <?php if (!isset($_SESSION["user"])){ echo "disabled"; }?> >Kosárba</button>
            </form>
          </div>
          <div class="pizzaBox">
            <form method="post" action="pizza.php">
              <img src="img\prosciutto.jpg"/>
              <p><a href="info.php?pizza=1">Prosciutto pizza <img class="infoIcon" src="img/info.png"></a></p>
              <input type="hidden" name="pizza" value="Prosciutto pizza">
              <input type="hidden" name="prize" value="1150">
              <button type="submit" <?php if (!isset($_SESSION["user"])){ echo "disabled"; }?> >Kosárba</button>
            </form>
          </div>
          <div class="pizzaBox">
            <form method="post" action="pizza.php">
              <img src="img\pepperoni.jpg"/>
              <p><a href="info.php?pizza=2">Pepperoni pizza <img class="infoIcon" src="img/info.png"></a></p>
              <input type="hidden" name="pizza" value="Pepperoni pizza">
              <input type="hidden" name="prize" value="1220">
              <button type="submit" <?php if (!isset($_SESSION["user"])){ echo "disabled"; }?> >Kosárba</button>
            </form>
          </div>
      </div>
    </div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
