<?php include_once("header.php"); ?>
    <title>Elérhetőség</title>
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
			<img class="pepe" src="img/pepelogo2.png" width="105">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
	  <?php
	  	include_once("loginchecked.php");
	  ?>
    </div>
    <div class="contentBody">
      <!-- A menu beillesztése -->
      <?php include_once("menu.php"); ?>
      <div class="content">
          <h2>Elérhetőségeink</h2>
      <h3>Telefon: 06/69-420-420</h3>
      <h3>E-mail: pepepizza@pepepizza.com</h3>
      </div>
    </div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
