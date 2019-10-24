<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var actpopup;
		var actDate;
		var i=0;
		function calendar(){
			var d = new Date();
			var year= d.getFullYear();
			var month = d.getMonth();
			var text = year;
			var days;
			switch(month){
				case 0:
				case 2:
				case 4:
				case 6:
				case 7:
				case 9:
				case 11:
				default :
					days=31;
					break;
				case 3:
				case 5:
				case 8:
				case 10:
					days=30;
					break;
				case 1:
					days=28;
					break;
			}
			makeCalendar(year,days,d.getDate());
		}


		function makeCalendar(year,days,actday){
			var text;
			text="<table><tr>";
			for (var i = 1; i <= days; i++) {
				if (i == actday) {
					text+="<td style=\"background-color:red;\" id=\"" + i + "\" onclick=\"doSomething(this)\">"+i+"</td>";
				}else{
					text+="<td onclick=\"doSomething(this)\" id=\"" + i +"\">"+i+"</td>";
				}
				if (i%7 == 0) {
					text+="</tr><tr>";
				}
			}
			document.write(text);
		}
		
		function doSomething(e){
			//e.style.color = "red";
			/*var cumulativeOffset = function(e) {
			    var top = 0, left = 0;
			    do {
			        top += e.offsetTop  || 0;
			        left += e.offsetLeft || 0;
			        e = e.offsetParent;
			    } while(e);

			    return {
			        top: top,
			        left: left
			    };
			};*/
			/*console.log(i);*/
			i++;
			var a;
			/*var b = document.getElementById("avangers4");*/
			var parent = e.parentElement.parentElement.parentElement.parentElement.parentElement.id;
			/*console.log(parent);*/
			/*if(parent == "Bosszúállók: Végjáték"){
				a = document.getElementById("a");
			}*/
			/*var p = document.getElementsByClassName("popup");*/
			
			
			switch(parent){
				case "Bosszúállók: Végjáték": 
					a = document.getElementById("a");
					break;
				case "Pókember: Idegenben": 
					a = document.getElementById("b");
					break;
				case "aladin": 
					a = document.getElementById("c");
					break;
				case "oroszlankirály": 
					a = document.getElementById("d");
					break;
			}

			/*if (acttime) {
				console.log(actpop.id);
				actpop.display = "none";
			}*/
			/*console.log(p.length);
			for (var i = 0; i <= p.length - 1; i++) {
				if (p[i].id !== a.id) {
					p[i].style.display="none";
					/*console.log(p[i].id);
				}
			}*/

			if (actpopup) {
				/*console.log(actpopup.id+" disabled");*/
				actpopup.style.display = "none";
				actpopup = "";
			}
			//console.log(e);

			a.style.display = "block";
			var rect = e.getBoundingClientRect();
			/*console.log(document.body.scrollTop, window.pageYOffset);*/
			a.style.left = rect.left + e.offsetWidth + "px";
			a.style.top = rect.top + e.offsetHeight + window.pageYOffset + "px";
			a.style.backgroundColor = "white";

			if ((actDate) && (actDate.id == e.id)) {
				actpopup.style.display = "none";
				actpopup = "";
			}

			actpopup = a;
			actDate = e;
			/*if ((actDate) && ((actDate.id!== e.id) || (actpopup.id !== a.id))) {
				
				console.log(actpopup.id);
				a.style.display = "block";
				actpop = a;
				acttime = e;
				var rect = e.getBoundingClientRect();
				console.log(document.body.scrollTop, window.pageYOffset);
				a.style.left = rect.left + e.offsetWidth + "px";
				a.style.top = rect.top + e.offsetHeight + window.pageYOffset + "px";
				a.style.backgroundColor = "white";
			}else{
				console.log("nincs értelmezve");
				if (actpopup) {
					console.log(actpopup.id);
				}
				if (a) {
					console.log(a.id);
				}
				
				actpopup = a;
				actDate = e;
			}*/




			
			
			/*if ((!actpop) || (actpop.id !== a.id) || (acttime.id !== e.id)) {
				a.style.display = "block";
				actpop = a;
				acttime = e;
				var rect = e.getBoundingClientRect();
				console.log(document.body.scrollTop, window.pageYOffset);
				a.style.left = rect.left + e.offsetWidth + "px";
				a.style.top = rect.top + e.offsetHeight + window.pageYOffset + "px";
				a.style.backgroundColor = "white";
			}else{
				actpop = "";
			}*/

		}
		function popupDisable(){
			actpopup.style.display = "none";
			actpopup = "";
		}
		function filmKeresese(e){
			var element = document.getElementById("keresesi mezo");
			var value = element.value;
			/*console.log(value);
			console.log("elindult");
			alert("submited");*/
			var filmek = document.getElementsByClassName("kartyak");
			for (var i = 0; i < filmek.length; i++) {
				if ((value) && (sameMovies(filmek[i].id,value))) {
					filmek[i].style.display="none";
				}else if (!value) {
					filmek[i].style.display="block";
				}
				

				/*console.log(value,fi);*/
			}




			return false;
		}

		function sameMovies(first, second){

			return first !== second;
		}
		function restoreAll(){
			/*var elements = document.getElementsByClassName("kartyak");
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.display = "block";
			}*/
			/*
			var popups = document.getElementsByClassName("popup");
			for (var i = 0; i < popups.length; i++) {
				popups[i].style.display = "none";
			}*/
		}
	</script>
	<style type="text/css">
		* {
		  box-sizing: border-box;
		}
		.kartyak {
		  border: 0.1em solid gray;
		}
		.kartyak:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		.column1 {
		  float: left;
		  width: 10%;
		  height: 12em;
		  border: 0.1em solid green;
		}
		.column2 {
		  float: left;
		  height: 12em;
		  
		  border: 0.1em solid green;
		  width: 85%;

		}
		.column1, .column2{
		  margin-top: 1em;
		  margin-bottom: 1em;
		  margin-right: 1%;
		  margin-left: 1%;
		}
		.column1 img {
			height: 10em;
			width: 80%;
			margin: 9%;
		}
		.column2 p{
		  float: left;
		  width: 15%;
		  text-align: center;
		  padding-top: 3.5em;
		}
		table {
			width: 30%;
			margin-left: 5%;
			margin-right: 5%;
			float: left;
		  	text-align: center;
		  	padding-top: 3.5em;
		}
		td:hover{
			background-color: green;
		}
		.popup{
			display: none;
			position: absolute;
			border: 0.1em solid grey;

		}
		td{
			cursor:  pointer;
		}
		.popup > p{
			cursor:  pointer;
		}
		.popup > p:hover{
			background-color: yellow;
		}
		.keres{
			margin: auto;
  			width: 50%;
  			border: 3px solid green;
  			padding: 10px;
  			text-align: center;
		}

	</style>
</head>
<body onclick="restoreAll()">

<div class="keres">
	<form onsubmit="return filmKeresese(this)">
		<input type="text" name="kereses" id="keresesi mezo">
  		<input type="submit" value="Keresés">
  	</form>
</div>



<div class="kartyak" id="Bosszúállók: Végjáték">
	<div class="column1">
		<img src="filmkepek/Avengers-Endgame.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>tipusa</p>
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
		<img src="filmkepek/Pokember-Idegenben.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>tipusa</p>
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
		<img src="filmkepek/Aladin.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>tipusa</p>
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

<div class="kartyak" id="oroszlankirály">
	<div class="column1">
		<img src="filmkepek/oroszlankiraly.jpg">
	</div>
	<div class="column2">
		<p>szinkron</p>
		<p>felirat</p>
		<p>tipusa</p>
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
