<?php include_once("header.php"); ?>
    <title>Pizza infó</title>
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
          <img class="pepe" title="Pepe Pizzéria" src="img/pepelogo2.png" width="105">
          <h1 id="title">Pepe pizzéria</h1>
        </a>
      </div>
	  <?php
	  	include_once("loginchecked.php");
	  ?>
    </div>
    <div class="contentBody" id="contentBody">
      <!-- A menu beillesztése -->
      <?php include_once("menu.php"); ?>
      <div class="content">
        <?php
            $pizzaInfo = [
                ["id" => "0", "name" => "Margherita pizza", "info" => "A Margherita pizza az egyik klasszikus pizza, sokaknak a pizza szinonimája. Először 1889-ben, Nápolyban készítették el az olasz Margherita királyné részére. A piros paradicsom, a fehér mozarella és a zöld bazsalikom együttesével az olasz nemzeti színeket szimbolizálták.", "img" => "img/margherita.jpg" ],
                ["id" => "1", "name" => "Prosciutto pizza", "info" => "Prosciutto, a sonkás pizza. Ropogós tészta, gazdagon megrakva ínycsiklandó sonkával és mozzarella, valamint edámi sajttal. Az élményt a paradicsom, az oregánó és egyéb fűszerek teszik tökéletessé.", "img" => "img/prosciutto.jpg" ],
                ["id" => "2", "name" => "Pepperoni pizza", "info" => "A pepperoni szó az Amerikai paprikás szalámira utal. A szó az olasz peperone (harang paprika) többes számából (peperoni) származik. A pepperoni fűszeres, gyakran csípős szalámiféleség. Olaszországban a salame piccante vagy salamino piccante kifejezést használják (fűszeres, csípős szalámi) erre. ", "img" => "img/pepperoni.jpg" ]
            ];
            if(isset($_GET["pizza"]) && $_GET["pizza"] >= 0 && $_GET["pizza"] <= 2){
                echo "
                <img class='pizzaInfo' src='".$pizzaInfo[$_GET["pizza"]]["img"]."'>
                <h2>".$pizzaInfo[$_GET["pizza"]]["name"]."</h2>
                <p>".$pizzaInfo[$_GET["pizza"]]["info"]."</p>
                ";
            } else {
                echo "<h2>Nincs ilyen pizza! :( </h2>";
            }
        ?>
      </div>
    </div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
