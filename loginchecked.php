<?php
			if(isset($_SESSION['user']) != null){
				echo "<div class='user'>"."Bejelentkezve mint: ". "<b>".$_SESSION['user']."</b>"; 
			}
?>
