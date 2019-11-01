<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="filmek/script.js"></script>
	<link rel="stylesheet" type="text/css" href="filmek/styles.css">
</head>
<body>

<div class="keres">
	<form onsubmit="return filmKeresese(this)">
		<input type="text" name="kereses" id="keresesi mezo">
  		<input type="submit" value="Keresés">
  	</form>
</div>



<div class="kartyak" id="Bosszúállók: Végjáték">
	<div class="column1">
		<img src="filmek/filmkepek/Avengers-Endgame.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>Bosszúállók: Végjáték</p>
		<p>terem</p>
		<table oncopy="return false" oncut="return false" onpaste="return false">
			<script>
				calendar()
			</script>
		</table>
	</div>
	
</div>

<div class="kartyak" id="Pókember: Idegenben">
	<div class="column1">
		<img src="filmek/filmkepek/Pokember-Idegenben.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>Pókember: Idegenben</p>
		<p>terem</p>
		<table oncopy="return false" oncut="return false" onpaste="return false">
			<script>
				calendar()
			</script>
		</table>
	</div>
</div>

<div class="kartyak" id="aladin">
	<div class="column1">
		<img src="filmek/filmkepek/Aladin.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>Aladin</p>
		<p>terem</p>
		<table oncopy="return false" oncut="return false" onpaste="return false">
			<script>
				calendar()
			</script>
		</table>
	</div>
</div>

<div class="kartyak" id="oroszlánkirály">
	<div class="column1">
		<img src="filmek/filmkepek/oroszlankiraly.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>Oroszlánkirály</p>
		<p>terem</p>
		<table oncopy="return false" oncut="return false" onpaste="return false">
			<script>
				calendar()
			</script>
		</table>
	</div>
</div>

<?php include 'filmek/beolvas.php';?>

<script>
	setColors();
</script>

</body>
</html>
