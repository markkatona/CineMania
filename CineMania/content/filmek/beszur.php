<?php 
	//$vetitesId=$_POST['id'];
	$date=$_POST['date'];
	$room=$_POST['room'];
	$places=$_POST['places'];
	echo "beszur.php";
	
	$conn = new mysqli("localhost", "root", "", "cinemania");
	if ($conn->connect_error) {
		echo "OH NO";
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT idopont, terem, helyek FROM vetites WHERE idopont='$date' and terem= '$room'";
	//$result = $conn->query($sql);
	$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
	$row = mysqli_fetch_row($result);
	$idopont = $row[0];
	$terem = $row[1];
	$places = $row[2] . $places;
	echo $places;
	//$num_of_rates = $row[1];
	//echo $idopont;
	/*$result = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
	$password = mysql_result($sql, 0);
	echo $password;*/

	//$row = mysqli_fetch_row($result);
	//echo $result->fetch_assoc();
	/*if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
			$vetitesId= $row['vetitesi_id'];
			$places = $row['helyek'] . $places;
		}
	}*/
	/*if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	if ($row['vetitesi_id']==$vetitesId) {
	    		$places = $row['helyek'] . $places;
	    		break;
	    	}
	    }
	}*/
	/*
	$row = mysqli_fetch_row($result);
	$avg_rate = $row[0];
	$num_of_rates = $row[1];
	
	$new_num_of_rates = $num_of_rates + 1;
	$new_avg_rate = ($avg_rate * $num_of_rates + $rate) / $new_num_of_rates;*/
	
	$sql = "UPDATE vetites SET helyek=$places WHERE idopont='$date' and terem= '$room'";
	if ($conn->query($sql) === TRUE) {
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	mysqli_close($conn);
 ?>