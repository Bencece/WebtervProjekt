<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Áraink</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include "meta.php"; ?>
  </head>
  <body>
    <div class="header">
      <h1 id="title">Pepe pizzéria</h1>
      <?php include "menu.php"; ?>
    </div>
    <div class="content">
        <table>
          <caption>Áraink</caption>
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
    <div class="footer">Pizza</div>
  </body>
</html>
