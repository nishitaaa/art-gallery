<html>
<head>
  <title>Assignment 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="a2.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./search1.php">The Art Gallery</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./search1.php">Home</a></li>
      <li><a href="creators.html">About Us</a></li>
      <li><a href="blogs.html">Blogs</a></li>
	  <li><a href="maintain.php">Maintain</a></li>
     <li><a href="XML.html">XML</a></li>
      <li><a href="shopping.html" target="_blank"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      <li>
       
    </ul>
  


    <div class="search-container">
          <form name="form1" method="POST">
          <input name="search" type="text" placeholder="Search..." size="30" maxlength="50"/>
          <input type="submit" name="Submit1" value="Search"/></form>
    </div>

  </div>
</nav>

<div class="container-fluid">
  <h1 id="home" style= "text-align: center;">The Art Gallery</h1>
  <p style= "text-align: center;"><em>Seeing art differently</em></p>
</div>

<div class="container">
<div class="row">
<div class="col-xs-4">
  <div id = "listofmenus">

<form method="post" action="search1.php">
    <input type="hidden" name="submitted" value="true" />

<label>Artists:
<select name="categoryArtists">
	<option value="Gogh">Vincent van Gogh</option>
	<option value="Mike">Michelangelo</option>
	<option value="Vinci">Leonardo da Vinci</option>
	<option value="Wood">Grant Wood</option>
	<option value="Munch">Edvard Munch</option>
</select>
</label>
<input type="submit"/>
</form>

<form method="post" action="search1.php">
    <input type="hidden" name="submittedMuseums" value="true" />

<label>Museums:
<select name="categoryMuseums">
	<option value="Modern">Museum of Modern Art</option>
	<option value="Sistine">Sistine Chapel</option>
	<option value="Louvre">Musee de Louvre</option>
	<option value="Chicago">Art Institute of Chicago</option>
	<option value="NationalArt">National Art Gallery</option>
</select>
</label>
<input type="submit"/>
</form>

<form method="post" action="search1.php">
<input type="hidden" name="submittedArtworks" value="true" />
<label>Artworks:
<select name="categoryArtworks">
	<option value="Starry">Starry Night</option>
	<option value="Creation">The Creation of Man</option>
	<option value="Mona">Mona Lisa</option>
	<option value="Gothic">American Gothic</option>
	<option value="Scream">The Scream</option>
</select>
</label>
<input type="submit"/>
</form>

</div>
</div>

<?php
if(isset($_POST['submitted'])) {

include('connect.php');
$categoryArtists = $_POST['categoryArtists'];

if ($categoryArtists == "Gogh") {
$query = "SELECT * FROM Artists WHERE name='Vincent van Gogh'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://www.artble.com/imgs/3/2/c/55784/vincent_van_gogh.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">'; 
		echo "Name: " .$row["name"] ."<br>";
		echo "Birth: " .$row["birth"] ."<br>";
		echo "Death: " .$row["death"] ."<br>";
		echo "Place of Living: " . $row["living"] ."<br>";
		echo "Genre: " . $row["genre"] ."<br>";
		echo "Famous Paintings: " . $row["famous"] ."<br>";
		echo '</div>';
 
	mysqli_close($dbcon);
	}
}


if ($categoryArtists == "Mike") {
$query = "SELECT * FROM Artists WHERE name='Michelangelo'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://media1.britannica.com/eb-media/46/75046-004-E437D9A2.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo "Name: " .$row["name"] ."<br>";
		echo "Birth: " .$row["birth"] ."<br>";
		echo "Death: " .$row["death"] ."<br>";
		echo "Place of Living: " . $row["living"] ."<br>";
		echo "Genre: " . $row["genre"] ."<br>";
		echo "Famous Paintings: " . $row["famous"] ."<br>";
 		echo '</div>';
	mysqli_close($dbcon);
	}
}

if ($categoryArtists == "Vinci") {
$query = "SELECT * FROM Artists WHERE name='Leonardo da Vinci'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="http://www.leonardodavinci.net/images/leonardo-da-vinci.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo "Name: " .$row["name"] ."<br>";
		echo "Birth: " .$row["birth"] ."<br>";
		echo "Death: " .$row["death"] ."<br>";
		echo "Place of Living: " . $row["living"] ."<br>";
		echo "Genre: " . $row["genre"] ."<br>";
		echo "Famous Paintings: " . $row["famous"] ."<br>";
 		echo '</div>';
	mysqli_close($dbcon);
	}
}



if ($categoryArtists == "Wood") {
$query = "SELECT * FROM Artists WHERE name='Grant Wood'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://cdn.thinglink.me/api/image/621712957130145793/1240/10/scaletowidth" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo "Name: " .$row["name"] ."<br>";
		echo "Birth: " .$row["birth"] ."<br>";
		echo "Death: " .$row["death"] ."<br>";
		echo "Place of Living: " . $row["living"] ."<br>";
		echo "Genre: " . $row["genre"] ."<br>";
		echo "Famous Paintings: " . $row["famous"] ."<br>";
 		echo '</div>';
	mysqli_close($dbcon);
	}
}

if ($categoryArtists == "Munch") {
$query = "SELECT * FROM Artists WHERE name='Edvard Munch'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://s-media-cache-ak0.pinimg.com/originals/e6/d1/e5/e6d1e5343c5b3cec2f11ddc716a57cae.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo "Name: " .$row["name"] ."<br>";
		echo "Birth: " .$row["birth"] ."<br>";
		echo "Death: " .$row["death"] ."<br>";
		echo "Place of Living: " . $row["living"] ."<br>";
		echo "Genre: " . $row["genre"] ."<br>";
		echo "Famous Paintings: " . $row["famous"] ."<br>";
 		echo '</div>';
	mysqli_close($dbcon);
	}
}
}

if(isset($_POST['submittedMuseums'])) {

include('connect.php');
$categoryMuseums = $_POST['categoryMuseums'];

if ($categoryMuseums == "Modern") {
$query = "SELECT * FROM Museums WHERE name='Museum of Modern Art'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://usaartnews.com/wp-content/uploads/moma-the-museum-of-modern-art-new-york-entrance.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo '<a href="bigmodern.html" target="_blank">Museum of Modern Art</a><br>';
		echo "Name: " .$row["name"] ."<br>";
		echo "Description: " .$row["description"] ."<br>";
		echo '</div>';
	mysqli_close($dbcon);
	}
}

if ($categoryMuseums == "Sistine") {
$query = "SELECT * FROM Museums WHERE name='Sistine Chapel'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="http://www.museivaticani.va/content/dam/museivaticani/immagini/collezioni/musei/cappella_sistina/00_00_Cappella_Sistina.png/_jcr_content/renditions/cq5dam.web.1280.1280.png
" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo '<a href="bigsistine.html" target="_blank">Sistine Chapel</a><br>';
		echo "Name: " .$row["name"] ."<br>";
		echo "Description: " .$row["description"] ."<br>";
		 echo '</div>';
	mysqli_close($dbcon);
	}
}


if ($categoryMuseums == "Louvre") {
$query = "SELECT * FROM Museums WHERE name='Musee du Louvre'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://fr.petitsfrenchies.com/wp-content/uploads/2017/01/museedulouvre-1460x650.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo '<a href="biglouvre.html" target="_blank">Musee du Louvre</a><br>';
		echo "Name: " .$row["name"] ."<br>";
		echo "Description: " .$row["description"] ."<br>";
		  echo '</div>';
	mysqli_close($dbcon);
	}
}

if ($categoryMuseums == "Chicago") {
$query = "SELECT * FROM Museums WHERE name='Art Institute of Chicago'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://pursuitist.com/wp-content/uploads/2014/09/Art-Institute-of-Chicago-Named-The-World%E2%80%99s-Best-Museum.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo '<a href="bigchicago.html" target="_blank">Art Institute of Chicago</a><br>';
		echo "Name: " .$row["name"] ."<br>";
		echo "Description: " .$row["description"] ."<br>";
		 echo '</div>';
	mysqli_close($dbcon);
	}
}

if ($categoryMuseums == "NationalArt") {
$query = "SELECT * FROM Museums WHERE name='National Gallery of Art'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://c2.staticflickr.com/4/3832/9165024504_7e5825d201_b.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo '<a href="bignational.html" target="_blank">National Gallery of Art</a><br>';
		echo "Name: " .$row["name"] ."<br>";
		echo "Description: " .$row["description"] ."<br>";
		echo '</div>';
	mysqli_close($dbcon);
	}
}
}

if(isset($_POST['submittedArtworks'])) {

include('connect.php');
$categoryArtworks = $_POST['categoryArtworks'];

if ($categoryArtworks == "Starry") {
$query = "SELECT * FROM Artworks WHERE name='Starry Night'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://www.muralswallpaper.co.uk/app/uploads/starry-night-art-plain.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">'; 
		echo "Name: " . $row["name"] ."<br>";
		echo "Date: " . $row["date1"] ."<br>";
		echo "Type: " . $row["type"] ."<br>";
		echo "Dimensions: " . $row["dimensions"] ."<br>";
		echo "Location: " . $row["location"] ."<br>";
		echo "Artist: " . $row["artist"] ."<br>";
		echo "Price: " . $row["price"] ."<br>";
 		echo "Genre: " . $row["genre"] ."<br>";
		echo '</div>';
	mysqli_close($dbcon);
	}
}


if ($categoryArtworks == "Creation") {
$query = "SELECT * FROM Artworks WHERE name='Creation of Man'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://www.fulcrumgallery.com/product-images/P820354-10/michelangelo-creation-of-man.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo "Name: " . $row["name"] ."<br>";
		echo "Date: " . $row["date1"] ."<br>";
		echo "Type: " . $row["type"] ."<br>";
		echo "Dimensions: " . $row["dimensions"] ."<br>";
		echo "Location: " . $row["location"] ."<br>";
		echo "Artist: " . $row["artist"] ."<br>";
		echo "Price: " . $row["price"] ."<br>";
 		echo "Genre: " . $row["genre"] ."<br>";
 		echo '</div>';
	mysqli_close($dbcon);
	}
}

if ($categoryArtworks == "Mona") {
$query = "SELECT * FROM Artworks WHERE name='Mona Lisa'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://media1.britannica.com/eb-media/24/189624-004-93915DC4.jpg" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo "Name: " . $row["name"] ."<br>";
		echo "Date: " . $row["date1"] ."<br>";
		echo "Type: " . $row["type"] ."<br>";
		echo "Dimensions: " . $row["dimensions"] ."<br>";
		echo "Location: " . $row["location"] ."<br>";
		echo "Artist: " . $row["artist"] ."<br>";
		echo "Price: " . $row["price"] ."<br>";
 		echo "Genre: " . $row["genre"] ."<br>";
		echo '</div>';
	mysqli_close($dbcon);
	}
}



if ($categoryArtworks == "Gothic") {
$query = "SELECT * FROM Artworks WHERE name='American Gothic'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://www.gannett-cdn.com/-mm-/cd33bd15897a848c56f7474cb7c853fd2e881f2c/c=180-0-4688-6001&r=537&c=0-0-534-712/local/-/media/Cincinnati/Cincinnati/2014/08/22/1408740930000-American-GothicA.jpg
" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo "Name: " . $row["name"] ."<br>";
		echo "Date: " . $row["date1"] ."<br>";
		echo "Type: " . $row["type"] ."<br>";
		echo "Dimensions: " . $row["dimensions"] ."<br>";
		echo "Location: " . $row["location"] ."<br>";
		echo "Artist: " . $row["artist"] ."<br>";
		echo "Price: " . $row["price"] ."<br>";
 		echo "Genre: " . $row["genre"] ."<br>";
		echo '</div>';
	mysqli_close($dbcon);
	}
}

if ($categoryArtworks == "Scream") {
$query = "SELECT * FROM Artworks WHERE name='The Scream'";

$result = mysqli_query($dbcon, $query) or die('Error getting data');


	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="col-xs-4">'; 
		echo '<img src="https://qph.ec.quoracdn.net/main-qimg-ffd1dc0f36bdd4fbc50f3623ea292800-c
" width="100%" height="50%">';
		echo '</div>';
		echo '<div class="col-xs-4">';
		echo "Name: " . $row["name"] ."<br>";
		echo "Date: " . $row["date1"] ."<br>";
		echo "Type: " . $row["type"] ."<br>";
		echo "Dimensions: " . $row["dimensions"] ."<br>";
		echo "Location: " . $row["location"] ."<br>";
		echo "Artist: " . $row["artist"] ."<br>";
		echo "Price: " . $row["price"] ."<br>";
 		echo "Genre: " . $row["genre"] ."<br>";
		echo '</div>';
	mysqli_close($dbcon);
		}
	}
}

?>

<?php

include("connect.php");
//$output = NULL;


//echo "<p>Search Results: </p>";
	
if (isset($_POST['Submit1'])) {
	$search = $dbcon->real_escape_string($_POST['search']);
	$query = "SELECT * FROM Artworks WHERE name = '$search'";
	$query1 = mysqli_query($dbcon, $query);
	$set = 0;
	echo '<div style="position: absolute; bottom: 5%; right: 5%;">';
	while($rows = mysqli_fetch_array($query1)) {
		$set = 1;
		$name = $rows['name'];
		$date1 = $rows['date1'];
		$artist = $rows['artist'];
		
		echo "<div>Artwork name is: $name<br>Date of Production: $date1<br>Artist is: $artist</div>";
	}
	if ($set == 0){
		echo "<div>No results</div>";
	}
	echo '</div>';
	mysqli_close($dbcon);
}
	

?>

</body>
</html>