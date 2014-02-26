<!DOCTYPE HTML>
<html>
<head>
<style>
.error {
	color: #FF0000;
}
</style>
</head>
<body> 



<h2>PHP Form Validation Example</h2>
	<p>
		<span class="error">* required field.</span>
	</p>
	<form method="post" action="php_mysql_action.php">

			<input type="submit" name="BUTTON_SELECT_ALL" value="SELECT ALL"><br />
			<input type="submit" name="BUTTON_INSERT" value="INSERT INTO"><br />
			
			Table_Name: <input type="text" name="table_name">  
			<input type="submit" name="BUTTON_CREATE_TABLE" value="CREATE TABLE"><br />
			<input type="submit" name="BUTTON_SHOW_ALL_TABLES" value="SHOW ALL TABLE"><br />
			
	</form>


</body>
</html>
