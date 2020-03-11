<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Főoldal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="print" href="print.css">
    <!-- Viewport beillesztése -->
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
      <!-- A menu beillesztése -->
      <?php include "menu.php"; ?>     
      <div class="content">
        <h1>Üdvözlünk a Pepe Pizzéria weboldalán</h1>
          <div class="szoveg" style="min-height: 300px"><h3>A 100 éves múlt</h3>
            <img src="img\pepefriends.png" width=200px style="float:right">
            Amikor 1920-ban megtörtént a <a href="https://hu.wikipedia.org/wiki/Trianoni_b%C3%A9keszerz%C5%91d%C3%A9s">Trianoni béka-kötés</a>, Pepe(<u><b>Pepenszki Pepega</b></u>) és barátai Olaszországba utaztak, hogy megtalálják a lelki békájukat. Ezen az úton, Bolognában találtak rá a legjobb pizzára. 
            <br>A pizza, amelyet ma is elkészíthetünk neked, már 100 éve hódít. Rendeld meg ma 	a kedvenc Pepe pizzádat. 1 óra alatt házhoz is visszük!
          </div>
      </div>
    </div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
