<?php

function insertTo ($con, $query_str)
{
	// Create connection
	$con = mysqli_connect("localhost", "root", "bobosoft", "test");
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo "MySql connected successfully...";
	}
	
	
	if (! mysqli_query($con, $query_str)) {
		die('Error: ' . mysqli_error($con));
	}
	echo "1 record added";
	
	mysqli_close($con);
}

?>

<?php
if (isset($_POST['BUTTON_SELECT_ALL'])) {
	
	// Create connection
	$con = mysqli_connect("localhost", "root", "bobosoft", "test");
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo "MySql connected successfully...";
	}
	
	$query_str = "SELECT * FROM pet";
	$result = mysqli_query($con, $query_str);
	
	while ($row = mysqli_fetch_array($result)) {
		// echo $row['FirstName'] . " " . $row['LastName'];
		
		echo "<pre>";
		print_r($row);
		echo "</pre>";
	}
	
	mysqli_close($con);
}

if (isset($_POST['BUTTON_INSERT'])) {
	insertTo($con, 
			"INSERT INTO pet (name, owner, sex, birth)
		VALUES ('Peter2', 'MM', 'F', '2014-01-04')");
}

?>


