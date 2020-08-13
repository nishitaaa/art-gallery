<?php

include("connect.php");
$output = NULL;


//echo "<p>Search Results: </p>";
	
if (!isset($_POST['Submit1'])) {
	$search = $dbcon->real_escape_string($_POST['search']);
	$query = $dbcon->query("SELECT * FROM Artworks WHERE name = '$search'");
	
	if($query->num_rows > 0){
		while($rows = $query->fetch_assoc()) {
			$name = $rows['name'];
			$date1 = $rows['date1'];
			$artist = $rows['artist'];
			
			$output = "Artwork name is: $name<br>Date of Production: $date1<br>Artist is: $artist";
		}
	}else{
		$output = "No results";
	}
} 
?>


<?php

include("connect.php");
$output = NULL;


//echo "<p>Search Results: </p>";
	
if (!isset($_POST['Submit1'])) {
	$search = $dbcon->real_escape_string($_POST['search']);
	$query = "SELECT * FROM Artworks WHERE name = '$search'";
	$query = mysqli_query($dbcon, $query);
	
		while($row = mysqli_fetch_array($query)) {
			$name = $rows['name'];
			$date1 = $rows['date1'];
			$artist = $rows['artist'];
			
			echo "Artwork name is: $name<br>Date of Production: $date1<br>Artist is: $artist";
		}
	}else{
		$output = "No results";
	}
	mysqli_close($dbcon);
	

?>