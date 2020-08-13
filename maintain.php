<!DOCTYPE html>
<html>
<head>
<title>Maintain</title>
</head>

<body>
<h1 style="text-align:center;">Maintain</h1>
<hr>

<label>Add Artwork</label>
<form action="maintain.php" method="POST">
	Name: <input type="text" name="name1"><br>
	Date: <input type="text" name="date1"><br>
	Artist: <input type="text" name="artist"><br>
	<input type="submit" name="Insert" value="Add Entries">
</form>

<?php
include("connect.php");

if (isset($_POST['Insert'])) {
	$name = $_POST['name1'];
	$date = $_POST['date1'];
	$artist = $_POST['artist'];
	
$sql = "INSERT INTO Artworks (name, date1, artist)
VALUES ('$name', '$date', '$artist')";
$query1 = mysqli_query($dbcon, $sql);

if ($dbcon->query($query1) === TRUE) {
    echo "New record created successfully";
} else {
    echo " ";
}

$dbcon->close();
}
?>
	
<br>

<label>Delete Artwork</label>
<form action="maintain.php" method="POST">
	Name: <input type="text" name="name2"><br>
	Date: <input type="text" name="date2"><br>
	Artist: <input type="text" name="artist2"><br>
	<input type="submit" name="Delete" value="Delete Entries">
</form>

<?php
include("connect.php");

if (isset($_POST['Delete'])) {
	$name2 = $_POST['name2'];
	$date2 = $_POST['date2'];
	$artist2 = $_POST['artist2'];
	
$sql = "DELETE FROM Artworks WHERE name='$name2'";
$query1 = mysqli_query($dbcon, $sql);

if ($dbcon->query($query1) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo " ";
}

$dbcon->close();
}
?>


<br>




</body>
</html>