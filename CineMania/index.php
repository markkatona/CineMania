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
 
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  width: 16.6%;
  padding-top: 14px;
  padding-bottom: 10px;
  float: left;
  color: #f2f2f2;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
iframe {
	width: 100%;
	height: 100%;
	position: absolute;
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="javascript:loadContent('home.php')">HOME/LOGO</a>
  <a href="javascript:loadContent('filmek.php')">FILMEK</a>
  <a href="javascript:loadContent('ertekeles.php')">ERTEKELES</a>
  <a href="javascript:loadContent('araink.php')">ARAINK</a>
  <a href="javascript:loadContent('cinebar.php')">CINEBAR</a>
  <a href="javascript:loadContent('elerhetosegek.php')">ELERHETOSEGEK</a>
</div>

<div id="content" class="content">
	<iframe id="myiframe" src="content/home.php" frameborder="0" ></iframe>
</div>

</body>
</html>
