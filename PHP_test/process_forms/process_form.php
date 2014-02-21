<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br/>
Your email address is: <?php echo $_POST["email"]; ?> <br/>

<?php 
if (isset($_POST['BUTTON_NAME'])) 
{ 
   echo "button name has been pressed"; 
}  

?>

<pre>
<?php echo "all _POST elemenets" . print_r($_POST); ?>
</pre>


</body>
</html>