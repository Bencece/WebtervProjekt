<?php include_once("header.php"); 
	if(!isset($_SESSION["user"])){
		header('Location: login.php');
		exit;
	}
?>
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
			<img class="pepe" title="Pepe Pizzéria" src="img/pepelogo2.png" width="105">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
	  <?php
		  include_once("loginchecked.php");
		  $index = 0;
		  $summa = 0;
		  $today = date("m-d");
		  $birthday = date("m-d",strtotime($_SESSION["birthday"]));
		  $toppings = [
			  ["name" => "Edámi sajt", "prize" => "200"],
			  ["name" => "Parmezán sajt", "prize" => "250"],
			  ["name" => "Cheddar sajt", "prize" => "400"],
			  ["name" => "Vörös Cheddar sajt", "prize" => "500"]
		  ];
		  if(isset($_POST["delete"])){
			  foreach ($_SESSION["cart"] as $pizza){
				  if($_POST["delete"] == $pizza["id"]){
					  $key = array_search($pizza, $_SESSION["cart"]);
					  unset($_SESSION["cart"][$key]);
				  }
			  }
		  }
		  if(isset($_POST["putItOn"])){
			  foreach ($_SESSION["cart"] as $pizza){
				  if($_POST["putItOn"] == $pizza["id"]){
					  $key = array_search($pizza, $_SESSION["cart"]);
					  $toppingPrize = array_search($_POST["topping"], array_column($toppings, 'name'));
					  array_push($_SESSION["cart"][$key]["toppings"], [ "topping" => $_POST["topping"] , "toppingPrize" => $toppings[$toppingPrize]["prize"] ]);
				  }
			  }
		  }
		?>
    </div>
	<div class="contentBody">
      <!-- A menu beillesztése -->
      <?php include_once("menu.php"); ?>
		<div id="kosar" class="content">
			<div class="sidebar">
			<h4>Sajtadagoló</h4>
			<hr id="mylittlehr">
			Edámi +200Ft<br>
			Parmezán +250Ft<br>
			Cheddar +400Ft<br>
			Vörös Cheddar +500Ft<br>
			</div>
			<div id="contentCart">
				<?php
					if (count($_SESSION["cart"]) > 0){
						echo "
						<table class='cart'>
							<thead>
								<tr>
									<td colspan=3>A Kosaradban lévő pizzák:</td>
								</tr>
							</thead>
							<tbody>";
						foreach ($_SESSION["cart"] as $pizza){
							echo "<tr>";
							echo "<td style='text-align: left;'>".$pizza["name"]."<br>";
							if($pizza["toppings"] != []){
								echo "<ul>";
								foreach ($pizza["toppings"] as $topping){
									echo "<li>".$topping["topping"]." +".$topping["toppingPrize"]." Ft</li>";
									$summa += $topping["toppingPrize"];
								}
								echo "</ul>";
							}
							echo "	
								<form method='post' action='cart.php'>
									<select name='topping' required>
									<option selected disabled value=''>Plusz feltét...</option>";
									foreach ($toppings as $topping){
										echo "<option value='".$topping["name"]."'>".$topping["name"]." +".$topping["prize"]." Ft</option>";
									}
							echo "
									</select>
									<input type='hidden' name='putItOn' value='".$pizza["id"]."'>
									<button type='submit'>+</button>
								</form>
								</td>";
							echo "<td>".$pizza["prize"]." Ft</td>";
							echo "
							<td>
								<form method='post' action='cart.php'>
									<input type='hidden' name='delete' value='".$pizza["id"]."'>
									<button type='submit'>X</button>
								</form>
							</td>";
							echo "</tr>";
							$summa += $pizza["prize"];
							$index++;
						}
						//Ha szülinapja van
						if($today == $birthday){
							$summa*=0.9;
						}
						echo "
							</tbody>
							<tfoot>
								<tr>
									<td colspan=2>Fizetendő:";
									//Ha szülinapja van
									if($today == $birthday){
										echo "<br>Sok boldog születésnapot! Ma 10% kedvezményt kapsz ajándékba.";
									}
									echo "</td>
									<td>".$summa." Ft</td>
								</tr>
							</tfoot>
						</table>
						";
					} else {
						echo "<p style='margin-left: 5px'>A kosarad jelenleg üres!</p>";
					}
				?>
			</div>
		</div>
	</div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
