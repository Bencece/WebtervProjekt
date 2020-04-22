<?php include_once("header.php"); 
	if(!isset($_SESSION["user"])){
		header('Location: login.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Kosár</title>
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
			<img class="pepe" src="img\pepelogo2.png" width="105px">
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
		<div id="kosar" class="content">
			<div class="sidebar">
			<h4>Sajtadagoló</h4>
			<hr style="border: 1px solid grey; margin-left: 0;" width="50%">
			<a href="#">Edámi</a>+200Ft
			<a href="#">Parmezán</a>+250Ft
			<a href="#">Cheddar</a>+400Ft
			<a href="#">Vörös Cheddar</a>+500Ft
			</div>
			<div class="contentCart">
				<?php
					$index = 0;
					$summa = 0;
					$toppings = [
						["name" => "Edámi sajt", "prize" => "200"],
						["name" => "Parmezán sajt", "prize" => "250"],
						["name" => "Cheddar sajt", "prize" => "400"],
						["name" => "Vörös Cheddar sajt", "prize" => "500"]
					];
					if(isset($_POST["delete"])){
						foreach ($_SESSION["cart"] as $pizza){
							if($_POST["delete"] == $pizza["name"]){
								$key = array_search($pizza, $_SESSION["cart"]);
								unset($_SESSION["cart"][$key]);
							}
						}
					}
					if(isset($_POST["putItOn"])){
						foreach ($_SESSION["cart"] as $pizza){
							if($_POST["putItOn"] == $pizza["name"]){
								$key = array_search($pizza, $_SESSION["cart"]);
								$toppingPrize = array_search($_POST["topping"], array_column($toppings, 'name'));
								array_push($_SESSION["cart"][$key]["toppings"], [ "topping" => $_POST["topping"] , "toppingPrize" => $toppings[$toppingPrize]["prize"] ]);
							}
						}
					}
					if (count($_SESSION["cart"]) > 0){
						echo "
						<table id='cartTable'>
							<thead>
								<tr>
									<td colspan=3>A Kosaradban lévő pizzák:</td>
								</tr>
							</thead>
							<tbody>";
						foreach ($_SESSION["cart"] as $pizza){
							echo "<tr>";
							echo "<td>".$pizza["name"]."<br>";
							if($pizza["toppings"] != []){
								echo "<ul>";
								foreach ($pizza["toppings"] as $topping){
									echo "<li>".$topping["topping"]." +".$topping["toppingPrize"]." Ft</li>";
								}
								echo "</ul>";
							}
							echo "	
								<form method='post' action='cart.php'>
									<select name='topping' required>
									<option selected disabled value=''>Plussz feltét...</option>";
									foreach ($toppings as $topping){
										echo "<option value='".$topping["name"]."'>".$topping["name"]." +".$topping["prize"]." Ft</option>";
									}
							echo "
									</select>
									<input type='hidden' name='putItOn' value='".$pizza["name"]."'>
									<button type='submit'>+</button>
								</form>
								</td>";
							echo "<td>".$pizza["prize"]." Ft</td>";
							echo "
							<td>
								<form method='post' action='cart.php'>
									<input type='hidden' name='delete' value='".$pizza["name"]."'>
									<button type='submit'>X</button>
								</form>
							</td>";
							echo "</tr>";
							$summa += $pizza["prize"];
							$index++;
						}
						echo "
							</tbody>
							<tfoot>
								<tr>
									<td colspan=2>Fizetendő:</td>
									<td>".$summa." Ft</td>
								</tr>
							</tfoot>
						</table>
						";
					} else {
						echo "<p>Kosarad jelenleg üres!</p>";
					}
				?>
			</div>
		</div>
	</div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
