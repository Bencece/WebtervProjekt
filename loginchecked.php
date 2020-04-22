<?php
			if(isset($_SESSION['user']) != null){
				echo "<div class='user'>"."Bejelentkezve: ". "<b>".$_SESSION['user']."</b>"; 
			}
?>
