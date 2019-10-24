<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<script>

	function loadContent(src){
		var folder = "content/";
		document.getElementById("myiframe").src=folder.concat(src);
	}

</script>
<style>
 
html, body {
	overflow: auto;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
}

.topnav {
	overflow: hidden;
	background-color: #333;
}

#menu{
    height: 7vh;
    width: 100%;
    display: grid;
    grid-template-rows: 100%;
    grid-template-columns: 20% 16% 16% 16% 16% 16%;
    grid-template-areas: "B0 B1 B2 B3 B4 B5";
    position: fixed;
	z-index: 10;
    opacity: 0.95;
}

#button0{grid-area: B0;}
#button1{grid-area: B1;}
#button2{grid-area: B2;}
#button3{grid-area: B3;}    
#button4{grid-area: B4;}
#button5{grid-area: B5;}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
iframe {
	overflow: hidden;
	width: 100%;
	height: 150%;
	position: absolute;
}

</style>
</head>
<body>

	<div id="menu" class="topnav">
	  <a id="button0" class="active" href="javascript:loadContent('home.php')">HOME/LOGO</a>
	  <a id="button1" href="javascript:loadContent('filmek.php')">FILMEK</a>
	  <a id="button2" href="javascript:loadContent('ertekeles.php')">ERTEKELES</a>
	  <a id="button3" href="javascript:loadContent('araink.php')">ARAINK</a>
	  <a id="button4" href="javascript:loadContent('cinebar.php')">CINEBAR</a>
	  <a id="button5" href="javascript:loadContent('elerhetosegek.php')">ELERHETOSEGEK</a>
	</div>

	<iframe id="myiframe" src="content/home.php" frameborder="0" height="100%" width="100%"></iframe>

</body>
</html>
