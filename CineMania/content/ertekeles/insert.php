<?php 
	$id=$_POST['id'];
	$rate=$_POST['rate'];
	
	$conn = new mysqli("localhost", "root", "", "cinemania");
	if ($conn->connect_error) {
		echo "OH NO";
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT atlag_ertekeles, ertekelok_szama FROM filmek WHERE film_id=$id";
	$result = $conn->query($sql);
	
	$row = mysqli_fetch_row($result);
	$avg_rate = $row[0];
	$num_of_rates = $row[1];
	
	$new_num_of_rates = $num_of_rates + 1;
	$new_avg_rate = ($avg_rate * $num_of_rates + $rate) / $new_num_of_rates;
	
	$sql = "UPDATE filmek SET ertekelok_szama=$new_num_of_rates, atlag_ertekeles=$new_avg_rate WHERE film_id=$id";
	if ($conn->query($sql) === TRUE) {
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}	
	mysqli_close($conn);
 ?>