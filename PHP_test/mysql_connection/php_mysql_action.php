<?php

function showAllTables()
{
	// Create connection
	$con = mysqli_connect("localhost", "root", "bobosoft", "test");
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo "MySql connected successfully...";
	}
	
	$query_str="SHOW TABLES";
	
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$result = mysqli_query($con,$query_str);
	
	
	while($row = mysqli_fetch_array($result))
	{
		echo "<pre> ". print_r(row) . "</pre>";
	}
	
	
	
	mysqli_close($con);
}

function createDatabase($db_name)
{
	// Create connection
	$con = mysqli_connect("localhost", "root", "bobosoft", "test");
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo "MySql connected successfully...";
	}
	
	$query_str="CREATE DATABASE {$db_name}";
	if (mysqli_query($con,$query_str))
	{
		echo "Database {$db_name} created successfully";
	}
	else
	{
		echo "Error creating database: " . mysqli_error($con);
	}
	
	mysqli_close($con);
}

function createTable($table_name)
{
	// Create connection
	$con = mysqli_connect("localhost", "root", "bobosoft", "test");
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo "MySql connected successfully...";
	}
	
	// Create table
	$query_str="CREATE TABLE {$table_name}(FirstName CHAR(30),LastName CHAR(30),Age INT)";
	
	if (mysqli_query($con,$query_str))
	{
		echo "Database {$table_name} created successfully";
	}
	else
	{
	echo "Error creating database: " . mysqli_error($con);
	}
	
	mysqli_close($con);
	
	
}

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

/*FUNCTION IS NOT WORKING*/
function retrieve_data()
{
	/*
SELECT column_name(s)
FROM table_name
	 */
	
	$result = mysqli_query($con,"SELECT * FROM Persons");
	
	while($row = mysqli_fetch_array($result))
	{
		echo $row['FirstName'] . " " . $row['LastName'];
		echo "<br>";
	}
	
	
	
	/*
	 SELECT column_name(s)
FROM table_name
ORDER BY column_name(s) ASC|DESC
	 */
	$con=mysqli_connect("example.com","peter","abc123","my_db");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$result = mysqli_query($con,"SELECT * FROM Persons ORDER BY age");
	
	while($row = mysqli_fetch_array($result))
	{
		echo $row['FirstName'];
		echo " " . $row['LastName'];
		echo " " . $row['Age'];
		echo "<br>";
	}
	
	mysqli_close($con);
	
	
	
	/*
SELECT column_name(s)
FROM table_name
WHERE column_name operator value
	*/
	
	$con=mysqli_connect("example.com","peter","abc123","my_db");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$result = mysqli_query($con,"SELECT * FROM Persons
WHERE FirstName='Peter'");
	
	while($row = mysqli_fetch_array($result))
	{
		echo $row['FirstName'] . " " . $row['LastName'];
		echo "<br>";
	}
	
	
	
}

function delete()
{
	/*
	 DELETE FROM table_name
WHERE some_column = some_value
	 */
	
	$con=mysqli_connect("example.com","peter","abc123","my_db");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	mysqli_query($con,"DELETE FROM Persons WHERE LastName='Griffin'");
	
	mysqli_close($con);
	
}

function update()
{
	/*
UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value

	 *
	 *
	 *
	 */
	
	
	$con=mysqli_connect("example.com","peter","abc123","my_db");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	mysqli_query($con,"UPDATE Persons SET Age=36
WHERE FirstName='Peter' AND LastName='Griffin'");
	
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


if (isset($_POST['BUTTON_CREATE_TABLE'])) {

	createTable($_POST['table_name']);

}


if (isset($_POST['BUTTON_SHOW_ALL_TABLES'])) {

	showAllTables();

}

?>


