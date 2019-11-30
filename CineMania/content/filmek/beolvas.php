<?php
	$conn = new mysqli("localhost", "root", "", "cinemania");
	if ($conn->connect_error) {
		echo "OH NO";
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT v.vetitesi_id,v.film_id,v.idopont,v.terem,v.jegyar,v.szinkron,v.felirat,v.helyek,f.cim,f.tipus FROM vetites v join filmek f on v.film_id=f.film_id";
	$result = $conn->query($sql);

	//,idopont,terem,jegyar,szinkron,felirat
	//$row = mysqli_fetch_row($result);
	$titles = array();
	$places = array();
	$vetitesId = array();
	$filmId = array();
	$dates = array();
	$placeId = array();
	$rooms = array();
	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        //$data['film_id'] = $row['film_id'] ;
	        if (!in_array($row['cim'], $titles)) {
	        	array_push($titles, $row['cim']);
		        $data = "<div class=\"kartyak\" id=\"" . $row['cim'] . "\">" .
		        	"<div class=\"column1\">" .
		        	"<img src=\"filmek/filmkepek/" . $row['film_id'] . ".jpg\">" .
		        	"</div>" .
		        	"<div class=\"column2\">" .
		        	"<table oncopy=\"return false\" oncut=\"return false\" onpaste=\"return false\" >" .
		        	"<script>" .
		        	"calendar()" .
		        	"</script>" .
		        	"</table>" .
		        	"</div>" .
		        	"<div class=\"column3\">" .
		        	"<p>" . $row['cim'] . "</p>" .
		        	"<p>" . $row['tipus'] . "</p>" .
		        	"<p>" . $row['szinkron'] . "</p>" .
		        	"<p>" . $row['felirat'] . "</p>" .
		        	"</div>" .
		        	"</div>";
		        echo $data;
	    	}
	    	array_push($places, $row['helyek']);
	    	array_push($vetitesId, $row['vetitesi_id']);
	    	array_push($filmId, $row['film_id']);
	    	array_push($placeId, $row['film_id'] . "_" . substr($row['idopont'],8,8));
	    	array_push($rooms, $row['terem']);
	    	//$popuptext = "<script>function writePopups(){ echo \"";
	    	$date = substr($row['idopont'],8,8);
	    	//array_push($dates, $date)
	    	//echo $date;
	    	//if (!isset($dates[$row['film_id']])) {
	    		//$dates[$row['film_id']-1][0] = $row['film_id'];
	    		//print_r($dates[$row['film_id']-1]) ;
	    		//echo $row['film_id'];
	    	//}
	    	/*if(in_array($dates[$row['film_id']-1],$row['film_id'])){
	    		//array_push($dates[$row['film_id']],$date);

	    		echo "exist";
	    	}else{
	    		//array_push($dates[$row['film_id']],$date);
	    		echo "doesn't exist";
	    	}*/
	    	$sor = $row['film_id'];
	    	//echo $sor;
	    	$dates[$sor][]=$date;
	    	//print_r($dates) ;

			


	        /*echo "film_id= " . $row['film_id'] . "<br>" .
	        	"idopont= " . $row['idopont'] . "<br>" .
	        	"terem= " . $row['terem'] . "<br>" .
	        	"jegyar= " . $row['jegyar'] . "<br>" .
	        	"szinkron= " . $row['szinkron'] . "<br>" .
	        	"felirat= " . $row['felirat'] . "<br>" .
	        	"cim= " . $row['cim'] . "<br>" .
	        	"tipus= " . $row['tipus'] . "<br>";*/


	    }
	} else {
	    echo "0 results";
	}
	//print_r($dates) ;
	//echo array_key($dates);
	$popuptext = "";
	$prevDay= "";
	foreach ($dates as $i => $value) {
		//echo "$i: \n";
		//$popuptext = $popuptext . "<div class=\"popup\" id=\"" . $i . "\">\n";
		
		foreach ($value as $key => $v) {
			$day = substr($v,0,2);
			$time = substr($v,3,5);
			if($prevDay!==$day) {
				$popuptext = $popuptext . "</div>\n";
			}
			if ($prevDay!==$day) {
				$popuptext = $popuptext . "<div class=\"popup\" id=\"" . $i . "_" . $day . "\">\n";

				$popuptext = $popuptext . "<p>Időpontok:</p>\n";
			}//else{
			
			$popuptext = $popuptext . "<p onclick=\"popupDisable(this)\">" . $time . "</p>\n";
			//}
			//echo "$key: $v\n";
			/*if($prevDay!==$day) {
				$popuptext = $popuptext . "</div>\n";
			}*/
			$prevDay = $day;
		}
		$popuptext = $popuptext . "</div>\n";
	  
	}
	echo $popuptext;
	foreach ($places as $key => $value) {
		$room = $value;
		$roomArray = array();
		while ( $room > 0) {
			array_push($roomArray, substr($room,0,2));
			$room = substr($room, 2);
		}
		//echo $placeId[$key];
		echo "<div class=\"grayBackground\" id=\"v" . $placeId[$key] . "\" ><script>makePlaces(\"" . $value . "\");</script><p class=\"terem\">Terem: " . $rooms[$key] . "</p></div>";
	}
	/*echo "<div class=\"grayBackground\"><script>var arr = [12,23];makePlaces(arr);</script></div>";*/
	/*for ($i=0; $i <sizeof($popups) ; $i++) {
		$popuptext = $popuptext . "<div class=\"popup\" id=\"" .  . "\">\n";
		for ($j=1; $j <count($popups[$i]); $j++) {
			if ($j == 1) {
				$popuptext = $popuptext . "<p>" . $popups[$i][$j] . "</p>\n";
			}else{
				$popuptext = $popuptext . "<p onclick=\"popupDisable()\">" . $popups[$i][$j] . "</p>\n";
			}
		}
		$popuptext = $popuptext . "</div>\n";
		//echo $popuptext;
		//echo "<script>console.log(\"" . $popuptext . "\");</script>";
	}*/
	//echo json_encode($data);
	//echo $row['film_id'];

	/*$conn = new mysqli("localhost", "root", "", "cinemania");
	if ($conn->connect_error) {
		echo "OH NO";
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT terem FROM vetites";
	$result = $conn->query($sql);
	$row = mysqli_fetch_row($result);
	echo $row[0];*/








/*
	while(! feof($myfile))  {
		$Sor = fgets($myfile);
		$Sor = preg_replace("/\r|\n/", "", $Sor);
		if ($Sor == "---") {
			$i++;
			$j=0;
		}else{
			$j++;
		}
	}*/
	/*
	$popuptext = "<script>function writePopups(){ echo \"";
	for ($i=0; $i <sizeof($popups) ; $i++) {
		$popuptext = $popuptext . "<div class=\"popup\" id=\"" . $popups[$i][0]. "\">\n";
		for ($j=1; $j <count($popups[$i]); $j++) {
			if ($j == 1) {
				$popuptext = $popuptext . "<p>" . $popups[$i][$j] . "</p>\n";
			}else{
				$popuptext = $popuptext . "<p onclick=\"popupDisable()\">" . $popups[$i][$j] . "</p>\n";
			}
		}
		$popuptext = $popuptext . "</div>\n";
		//echo $popuptext;
		//echo "<script>console.log(\"" . $popuptext . "\");</script>";
	}
	$popuptext = $popuptext . "\";}</script>";
	echo $popuptext;*/


?> 