<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="ertekeles/style.css?version=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
		<script type="text/javascript" src="ertekeles/script.js?version=1"></script>
	</head>
	<body>
		<div class="bg-image"></div>
		<div id="content" class="content">

			<?php
			
				$conn = new mysqli("localhost", "root", "", "cinemania");
				if ($conn->connect_error) {
					echo "OH NO";
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "select film_id, cim, tipus, atlag_ertekeles, ertekelok_szama from filmek ";
				$result = $conn->query($sql);
				
				$row_count = $result->num_rows;
				$i = 0;
				
				while ($eredmeny= mysqli_fetch_row($result) ){
					$id = strval($eredmeny[0]);
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
				mysqli_close($conn);
				echo "</table>" ;
				echo "<script> countFilms($row_count); </script>";
			?>
		
		</div>
		<div id="popup" class="popup"> 
			<a id='csillag1' href='#'>
				<div class="popupstar">1</div>
			</a>
			<a id='csillag2' href='#'>
				<div class="popupstar">2</div>
			</a>
			<a id='csillag3' href='#'>
				<div class="popupstar">3</div>
			</a>
			<a id='csillag4' href='#'>
				<div class="popupstar">4</div>
			</a>
			<a id='csillag5' href='#'>
				<div class="popupstar">5</div>
			</a>
		</div>
	</body>
</html>
