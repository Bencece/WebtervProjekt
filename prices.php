<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Áraink</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="print" href="print.css">
    <?php include "meta.php"; ?>
  </head>
  <body>
    <div class="header">
			<!--Logo -->
	  <div class="pepeholder">
		<a href="index.php">
			<img src="img\pepelogo2.png" align="left" width="105px">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
    </div>
    <div class="contentBody">
      <?php include "menu.php"; ?>
      <div class="content">
          <table>
            <caption>Alap Pizza Árak</caption>
            <thead>
              <tr>
                <td>Termék</td>
                <td>Mennyiség</td>
                <td>Ár</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pizza1</td>
                <td>28cm</td>
                <td>1200</td>
              </tr>
              <tr>
                <td>Pizza2</td>
                <td>28cm</td>
                <td>1150</td>
              </tr>
              <tr>
                <td>Pizza3</td>
                <td>30cm</td>
                <td>1220</td>
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
