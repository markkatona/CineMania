<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: content/registration/login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: content/registration/login.php");
  }
?>
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
	background-color: #575757;
}

#menu{
	border-bottom: 0.2em solid #404040;
	border-bottom-left-radius: 20px 10px;
	border-bottom-right-radius: 20px 10px;
    height: 7vh;
    width: 100%;
    display: grid;
    grid-template-rows: 100%;
    grid-template-columns: 20% 15% 15% 15% 15% 20%;
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
div.content{
	position: fixed;
	top: 2.5em;
	z-index: 10;
    opacity: 0.95;
}
div.content > p{
	float: left;
	margin-left: 2em;
}

.topnav a:hover {
	background-color: #bc161b;
	color: white;
}

.topnav a.active {
	background-color: #bc161b;
	color: white;
}

iframe {
	overflow: hidden;
	width: 100%;
	height: 100%;
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

	<div class="content">
	  	<!-- notification message -->
	  	<!--<?php if (isset($_SESSION['success'])) : ?>
	      <div class="error success" >
	      	<h3>
	          <?php
	          	echo $_SESSION['success'];
	          	unset($_SESSION['success']);
	          ?>
	      	</h3>
	      </div>
	  	<?php endif ?>-->

	    <!-- logged in user information -->
	    <?php  if (isset($_SESSION['username'])) : ?>
	    	<p>Üdvözöljük, <strong><?php echo $_SESSION['username']; ?></strong></p>
	    	<p class="logout"> <a href="content/registration/login.php?logout='1'" style="color: red;">logout</a> </p>
	    <?php endif ?>
	</div>

	<iframe id="myiframe" src="content/home.php" frameborder="0" height="100%" width="100%"></iframe>



</body>
</html>
