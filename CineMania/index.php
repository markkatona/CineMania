<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<script>

	function loadContent(button_id,src){
		var folder = "content/";
		document.getElementById("myiframe").src=folder.concat(src);
		for(var i=0; i<=5; i++){
			if(document.getElementById("button".concat(i)).className=="active") {
				document.getElementById("button".concat(i)).className="nan";
			}
		}
		document.getElementById(button_id).className="active";
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
	background-color: #00a3cc;
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

div.topnav > a {
	display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%; 
    color: white;
    text-decoration: none;
    font-size: large;
}

.topnav a:hover {
	background-color: #33d6ff;
	color: white;
}

.topnav a.active {
	background-color: #33d6ff;
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
	  <a id="button0" class="active" href="javascript:loadContent('button0','home.php')">HOME/LOGO</a>
	  <a id="button1" href="javascript:loadContent('button1','filmek.php')">FILMEK</a>
	  <a id="button2" href="javascript:loadContent('button2','ertekeles.php')">ÉRTEKELÉS</a>
	  <a id="button3" href="javascript:loadContent('button3','araink.php')">ÁRAINK</a>
	  <a id="button4" href="javascript:loadContent('button4','cinebar.php')">CINEBAR</a>
	  <a id="button5" href="javascript:loadContent('button5','elerhetosegek.php')">ELÉRHETŐSÉGEK</a>
	</div>

	<iframe id="myiframe" src="content/home.php" frameborder="0" height="100%" width="100%"></iframe>

</body>
</html>
