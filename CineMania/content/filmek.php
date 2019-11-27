<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="filmek/script.js?version=7"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?version=7"></script>
	<link rel="stylesheet" type="text/css" href="filmek/styles.css?version=7">
</head>
<body>

<div class="keres" >
	<form onsubmit="return filmKeresese(this)">
		<input type="text" name="kereses" id="keresesi_mezo">
  		<input type="submit" value="Keresés">
  	</form>
</div>



<!--<div class="kartyak" id="Bosszúállók: Végjáték">
	<div class="column1">
		<img src="filmek/filmkepek/Avengers-Endgame.jpg">
	</div>
	<div class="column2">
		<table oncopy="return false" oncut="return false" onpaste="return false" >
			<script>
				calendar()
			</script>
		</table>
	</div>
	<div class="column3">
		<p>szinkron</p>
		<p>felirat</p>
		<p>Bosszúállók: Végjáték</p>
		<p class="terem">
			<script>
				setTerem("Bosszúállók: Végjáték","A3");
			</script>
		</p>
	</div>
	
</div>
<div class="kartyak" id="Pókember: Idegenben">
	<div class="column1">
		<img src="filmek/filmkepek/Pokember-Idegenben.jpg">
	</div>
	<div class="column2">
		<table oncopy="return false" oncut="return false" onpaste="return false">
			<script>
				calendar()
			</script>
		</table>
	</div>
	<div class="column3">
		<p>szinkron</p>
		<p>felirat</p>
		<p>Bosszúállók: Végjáték</p>
		<p>terem
		</p>
	</div>
</div>

<div class="kartyak" id="aladin">
	<div class="column1">
		<img src="filmek/filmkepek/Aladin.jpg">
	</div>
	<div class="column2">
		<table oncopy="return false" oncut="return false" onpaste="return false">
			<script>
				calendar()
			</script>
		</table>
	</div>
	<div class="column3">
		<p>szinkron</p>
		<p>felirat</p>
		<p>Bosszúállók: Végjáték</p>
		<p>terem</p>
	</div>
</div>

<div class="kartyak" id="oroszlánkirály">
	<div class="column1">
		<img src="filmek/filmkepek/oroszlankiraly.jpg">
	</div>
	<div class="column2">
		<table oncopy="return false" oncut="return false" onpaste="return false">
			<script>
				calendar()
			</script>
		</table>
	</div>
	<div class="column3">
		<p>szinkron</p>
		<p>felirat</p>
		<p>Bosszúállók: Végjáték</p>
		<p>terem</p>
	</div>
</div>-->

<?php include 'filmek/beolvas.php';?>

<script>
	getData();
	setColors();
</script>

</body>
</html>
