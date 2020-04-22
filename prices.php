<?php include_once("header.php"); ?>
    <title>Áraink</title>
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
    <div class="contentBody">
      <!-- A menu beillesztése -->
      <?php include_once("menu.php"); ?>
      <div class="content">
          <table id="table">
            <caption>Alap Pizza Árak</caption>
			<colgroup>
				<col>
			</colgroup>
            <thead>
              <tr>
                <td>Termék</td>
                <td>Méret</td>
                <td>Ár</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Margherita pizza</td>
                <td>28cm</td>
                <td>1200 Ft</td>
              </tr>
              <tr>
                <td>Prosciutto pizza</td>
                <td>28cm</td>
                <td>1150 Ft</td>
              </tr>
              <tr>
                <td>Pepperoni pizza</td>
                <td>30cm</td>
                <td>1220 Ft</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3">Az áraink forintban értendőek, és az áfát tartalmazzák.</td>
              </tr>
            </tfoot>
          </table>
		 
      </div>
    </div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
