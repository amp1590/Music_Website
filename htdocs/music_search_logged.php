
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style>

	a:link {
			color: green;
			background-color: transparent;
			text-decoration: none;
		}
	a:hover{
			color: red;
	}	

	</style>
</head>
<body>

</body>
</html>


<?php 
	
	$connection=mysqli_connect('localhost','root','','music');
	$search = $_POST['search'];
	$query = "SELECT * FROM myadmin WHERE music_name LIKE '$search%' ";
	$result = mysqli_query($connection,$query);

	if(mysqli_num_rows($result)==0){
		echo "No Match";
	}

	else{

    while($row=mysqli_fetch_array($result)){

		$name = $row['music_name'];
		$id = $row['id'];

			?>

						<p><a href="play_logged.php?p_id=<?php echo "$id"; ?>"><?php echo "$name"?></a></p>			
	
		<?php }  

	}

?>