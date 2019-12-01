<?php
$conn = new mysqli("localhost", "root", "", "cinemania");
	if ($conn->connect_error) {
		echo "OH NO";
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT film_id, cim FROM filmek";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo
				"<div class=\"slide ImgTransition\">
				<div>
					<img src=\"home/" . $row['film_id'] . ".jpg\" style=\"max-width:100%; height:auto;\"></div>
					<div class=\"movie\">" . $row['cim'] . "</div>
				</div>";
	    }

	}

?>
