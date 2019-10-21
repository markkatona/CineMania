<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>

	function myFunc(id){
		switch (id){
			case "HOME" : {
				console.log("home");
				document.getElementById("content").innerHTML = "HOME";
				break;
			}
			case "FILMEK" : {
				console.log("filmek");
				document.getElementById("content").innerHTML = "FILMEK";
				break;
			}
			case "ERTEKELES" : {
				console.log("ertekeles");
				document.getElementById("content").innerHTML = "ERTEKELES";
				break;
			}
			case "ARAINK" : {
				console.log("araink");
				document.getElementById("content").innerHTML = "ARAINK";
				break;
			}
			case "CINEBAR" : {
				console.log("cinebar");
				document.getElementById("content").innerHTML = "CINEBAR";
				break;
			}
			case "ELERHETOSEGEK" : {
				console.log("elerhetosegek");
				document.getElementById("content").innerHTML = "ELERHETOSEGEK";
				break;
			}
		}
	}

</script>
</head>
<body>

<div class="topnav">
  <a class="active" href="javascript:myFunc('HOME')">HOME/LOGO</a>
  <a href="javascript:myFunc('FILMEK')">FILMEK</a>
  <a href="javascript:myFunc('ERTEKELES')">ERTEKELES</a>
  <a href="javascript:myFunc('ARAINK')">ARAINK</a>
  <a href="javascript:myFunc('CINEBAR')">CINEBAR</a>
  <a href="javascript:myFunc('ELERHETOSEGEK')">ELERHETOSEGEK</a>
</div>

<div id="content" class="content">
  <h2>HOME</h2>
</div>

</body>
</html>
