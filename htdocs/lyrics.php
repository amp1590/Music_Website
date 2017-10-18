<?php
$connection = mysqli_connect('localhost','root','','music');
	$id = $_GET['p_id'];
	$query = "SELECT * FROM myadmin WHERE id='{$id}' ";
	$result = mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($result)){
	$music_name=$row['music_name'];
	$artist_name=$row['artist_name'];
	$duration = $row['duration'];
	$music_file = $row['music_file'];
	$lyrics_file = $row['lyrics_file'];

	//$image = $row['music_image'];
}
?>

<html>
<head>
<style>
body {
    background-image: url("image_11.jpg");
    background-color: #cccccc;
}
</style>
</head>
<body>
<div class="heading text-center"> 
<div>
	<h1 style="text-align:center; color:white">Track Info</h1>
<br><br>

<div>
<h3>Song : </h3><p style="color:white"><?php echo "$music_name" ?></p>
</div>
<div >
<h3> Artisrt : </h3><p style="color:white"><?php echo "$artist_name" ?></p>
</div><br>
<div>
<h2 style="color: white">Lyrics</h2>
<?php
$myfile = fopen("$lyrics_file", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</div><br>



                

            
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</div>
</body>
</html>

