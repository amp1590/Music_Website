
<?php
$connection = mysqli_connect('localhost','root','','music');
$query = "SELECT * FROM rashik";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result)){

	$music = $row['music_file'];
	$music_name = $row['music_name'];
?>
<html>
<audio controls>
  <source src=<?php echo "$music"; ?> type="audio/mpeg">
   Your browser does not support the audio element.
</audio>
</html>
<?php } ?>
