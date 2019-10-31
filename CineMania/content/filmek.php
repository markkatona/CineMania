<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="filmek/script.js"></script>
	<link rel="stylesheet" type="text/css" href="filmek/styles.css">
</head>
<body onclick="popupDisable()">

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
	<div class="popup" id="a">
		<p onclick="popupDisable()">Kedd: 14:30</p>
		<p onclick="popupDisable()">Szerda: 18:30</p>
		<p onclick="popupDisable()">Péntek: 12:00</p>
		<p onclick="popupDisable()">Péntek: 18:30</p>
		<p onclick="popupDisable()">Szombat: 20:00</p>
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
	<div class="popup" id="b">
		<p onclick="popupDisable()">Kedd: 14:30</p>
		<p onclick="popupDisable()">Kedd: 20:30</p>
		<p onclick="popupDisable()">Csütörtök: 12:00</p>
		<p onclick="popupDisable()">Péntek: 18:30</p>
		<p onclick="popupDisable()">Péntek: 20:00</p>
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
	<div class="popup" id="c">
		<p onclick="popupDisable()">Hétfő: 14:30</p>
		<p onclick="popupDisable()">Kedd: 19:30</p>
		<p onclick="popupDisable()">Péntek: 12:00</p>
		<p onclick="popupDisable()">Szombat: 18:30</p>
		<p onclick="popupDisable()">Szombat: 22:00</p>
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
	<div class="popup" id="d">
		<p onclick="popupDisable()">Hétfő: 14:30</p>
		<p onclick="popupDisable()">Kedd: 18:30</p>
		<p onclick="popupDisable()">Csütörtök: 12:00</p>
		<p onclick="popupDisable()">Péntek: 18:30</p>
		<p onclick="popupDisable()">Péntek: 21:00</p>
	</div>
</div>


</body>
</html>
