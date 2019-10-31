<?php
	$myfile = fopen("filmek/idopontok.txt", "r") or die("Unable to open file!");
	$i = 0;
	$j = 0;
	$popups = array();
	while(! feof($myfile))  {
		$Sor = fgets($myfile);
		$Sor = preg_replace("/\r|\n/", "", $Sor);
		if ($Sor == "---") {
			$i++;
			$j=0;
		}else{
			$popups[$i][$j] = $Sor;
			/*$popups[$i][$j] = preg_replace("/\r|\n/", "", $popups[$i][$j]);*/
			$j++;
		}
	}

	for ($i=0; $i <sizeof($popups) ; $i++) {
		$popuptext = "<div class=\"popup\" id=\"" . $popups[$i][0]. "\">\n";
		for ($j=1; $j <count($popups[$i]); $j++) {
			if ($j == 1) {
				$popuptext = $popuptext . "<p>" . $popups[$i][$j] . "</p>\n";
			}else{
				$popuptext = $popuptext . "<p onclick=\"popupDisable()\">" . $popups[$i][$j] . "</p>\n";
			}
		}
		$popuptext = $popuptext . "</div>\n";
		echo $popuptext;
		//echo "<script>console.log(\"" . $popuptext . "\");</script>";
	}




?> 