<?php
// Create connection
$con = mysqli_connect("localhost", "root", "bobosoft", "test");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "MySql connected successfully...";
}
?>

<?php

/*
 * Create a database
 */
/*
$sql="CREATE DATABASE my_db";
if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }

  */
  
  ?>



<?php

/*
 * Create a table
 */

/*
  $sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

*/

?>


<?php

// insert into
insertTo($con, 
		"INSERT INTO pet (name, owner, sex, birth) 
		VALUES ('Peter', 'MM', 'F', '2014-04-04')");

?>





<?php

/*
 * Select from database...
 */

$query_str = "SELECT * FROM pet";
$result = mysqli_query($con, $query_str);

while ($row = mysqli_fetch_array($result)) {
	// echo $row['FirstName'] . " " . $row['LastName'];
	
	echo "====Method 1=====";
	
	echo "<pre>";
	print_r($row);
	echo "</pre>";
	
	echo $row['name'];
	
	echo "<br>";
}

mysqli_close($con);
?>





<?php

function insertTo ($con, $query_str)
{
	
	if(!mysqli_query($con, $query_str))
	{
		die('Error: ' . mysqli_error($con));
	}
	echo "1 record added";
	
}

?>


