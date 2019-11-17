<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="ertekeles/style.css">
	</head>
	<body>
		<?php
			$conn = new mysqli("localhost", "root", "", "cinemania");
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "select film_id, cim from filmek ";
			$result = $conn->query($sql);
			echo "<table border=1> <tr> <th>Városnév</th><th>Lakosság</th> </tr>" ;
			while ($eredmeny= mysqli_fetch_row($result) )
			{
			echo "<tr><td>" . $eredmeny[0] . "</td> <td>" . $eredmeny[1] . "</th></tr>" ;
			}
			echo "</table>" ;
		?>
		<script src="ertekeles/script.js"></script>
		
		<div class="bg-image"></div>
		<div class="content"></div>
	</body>
</html>
