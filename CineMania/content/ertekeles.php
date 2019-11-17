<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="ertekeles/style.css">
	</head>
	<body>
		<script src="ertekeles/script.js"></script>
		
		<div class="bg-image"></div>
		<div class="content">

			<?php
				$conn = new mysqli("localhost", "root", "", "cinemania");
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "select film_id, cim from filmek ";
				$result = $conn->query($sql);
				while ($eredmeny= mysqli_fetch_row($result) ){
					echo "<div>" . $eredmeny[0] . $eredmeny[1] ."</div>";
				}
				echo "</table>" ;
			?>
			
		</div>
	</body>
</html>
