<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		* {
		  box-sizing: border-box;
		}
		.column1 {
		  float: left;
		  width: 10%;
		  margin: 1em;
		  height: 12em;
		  background-color: powderblue;
		  border: 0.1em solid green;
		}
		.column2 {
		  float: left;
		  margin: 1em;
		  height: 12em;
		  background-color: powderblue;
		  border: 0.1em solid green;
		  width: 85%;
		}
		.column1 img {
			height: 10em;
			width: 80%;
			margin: 0.75em;
		}
		.kartyak:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		.kartyak {
		  border: 0.1em solid gray;
		}
		.column2 p {
		  float: left;
		  width: 20%;
		  text-align: center;
		  padding-top: 3.5em;
		}
	</style>
</head>
<body>

<div class="kartyak">
	<div class="column1">
		<img src="filmkepek/Avengers-Endgame.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>tipusa</p>
		<p>terem</p>
		<p>vetités</p>
	</div>
</div>

</body>
</html>
