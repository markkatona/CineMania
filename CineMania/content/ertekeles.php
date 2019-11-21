<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="ertekeles/style.css?version=1">
		<script type="text/javascript" src="ertekeles/script.js?version=1"></script>
	</head>
	<body>
		<div class="bg-image"></div>
		<div class="content">

			<?php
				$conn = new mysqli("localhost", "root", "", "cinemania");
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "select film_id, cim, tipus, atlag_ertekeles, ertekelok_szama from filmek ";
				$result = $conn->query($sql);
				
				$row_count = $result->num_rows;
				$i = 0;
				
				while ($eredmeny= mysqli_fetch_row($result) ){
					$id = "link".strval($i);
					echo 
					"<a id='$id' href='#'>" . 
						"<div class='box'>" 
							. $eredmeny[1] . "<br>" 
							. $eredmeny[2] . "<br>" 
							. "<p class='paragraph'> Atlag ertekeles: " . $eredmeny[3] . "</p>" . "<br>" 
							. "<p class='paragraph'> Ertekelok szama: " . $eredmeny[4] . "</p>" .
						"</div>" .
					"</a>";
					$i = $i + 1;
				}
				echo "</table>" ;
				echo "<script> functionnn($row_count); </script>";
			?>
		
		</div>
		<div id="popup" class="popup"> 
				<div id="csillag1" class="popupstar">1</div>
				<div id="csillag2" class="popupstar">2</div>
				<div id="csillag3" class="popupstar">3</div>
				<div id="csillag4" class="popupstar">4</div>
				<div id="csillag5" class="popupstar">5</div>
			</div>
	</body>
</html>
