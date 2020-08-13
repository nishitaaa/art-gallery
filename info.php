<!DOCTYPE html>
<html>
<body>
<?php

	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pics= $_POST['pics'];


	echo "First name is: ".$fname."<br>";
 	echo "Last name is: ".$lname."<br>";
	

if(isset($_POST['submit'])){
$selected_val = $_POST['pics'];  // Storing Selected Value In Variable
echo "Total is :" .$selected_val;  // Displaying Selected Value
}


?>
</body>
</html>







