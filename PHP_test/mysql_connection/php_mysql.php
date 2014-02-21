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

			<input type="submit" name="BUTTON_SELECT_ALL" value="SELECT ALL">
			<input type="submit" name="BUTTON_INSERT" value="INSERT INTO">
			
	</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br/>";
echo $email;
echo "<br/>";
echo $website;
echo "<br/>";
echo $comment;
echo "<br/>";
echo $gender;
?>

</body>
</html>
