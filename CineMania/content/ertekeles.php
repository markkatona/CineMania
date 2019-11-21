<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="ertekeles/style.css?version=2">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js?version=2"></script>
		<script type="text/javascript" src="ertekeles/script.js?version=2"></script>
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
			<a id='star1' href='#' onmouseover="chbg('yellow',1)" onmouseout="chbg('white',1)">
				<div id='popupstar1' class="popupstar">1</div>
			</a>
			<a id='star2' href='#' onmouseover="chbg('yellow',2)" onmouseout="chbg('white',2)">
				<div id='popupstar2' class="popupstar">2</div>
			</a>
			<a id='star3' href='#' onmouseover="chbg('yellow',3)" onmouseout="chbg('white',3)">
				<div id='popupstar3' class="popupstar">3</div>
			</a>
			<a id='star4' href='#' onmouseover="chbg('yellow',4)" onmouseout="chbg('white',4)">
				<div id='popupstar4' class="popupstar">4</div>
			</a>
			<a id='star5' href='#' onmouseover="chbg('yellow',5)" onmouseout="chbg('white',5)">
				<div id='popupstar5' class="popupstar">5</div>
			</a>
		</div>
	</body>
</html>
