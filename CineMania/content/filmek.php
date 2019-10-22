<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	
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
					text+="<td style=\"background-color:red;\">"+i+"</td>";
				}else{
					text+="<td>"+i+"</td>";
				}
				if (i%7 == 0) {
					text+="</tr><tr>";
				}
			}
			document.write(text);
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
		<table>
			<script>
				calendar()
			</script>
		</table>
	</div>
</div>

</body>
</html>
