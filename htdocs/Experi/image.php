<html>
 <body>
 	<form method="POST" enctype="multipart/form-data">
 		<input type="file" name="image1">
 		<input type="file" name="image2">
		<input type="submit" name='submit' value="upload">
 	</form>
	
	<?php 

		@ini_set("output_buffering", "Off");
		@ini_set('implicit_flush', 1);
		@ini_set('zlib.output_compression', 0);
		@ini_set('max_execution_time',1200);

	if (isset($_POST['submit'])) {	
		$image1 = addslashes($_FILES['image1']['tmp_name']);
		$name1  = addslashes($_FILES['image1']['name']);
		$image1 = file_get_contents($image1);
		$image1 = base64_encode($image1);

		$image2 = addslashes($_FILES['image2']['tmp_name']);
		$name2  = addslashes($_FILES['image2']['name']);
		$image2 = file_get_contents($image2);
		$image2 = base64_encode($image2);
	
		$connection = mysqli_connect('localhost','root','','loginapp');
		$query = "INSERT INTO image(first_image_file,second_image_file) VALUES ('$image1','$image2') ";
		$result = mysqli_query($connection,$query);

		if($result){
			echo "Its ok";
		}
		else
			echo "It's not";
		
		$connection = mysqli_connect('localhost','root','','loginapp');

		$query="SELECT * FROM image ";
		$result = mysqli_query($connection,$query);

		while($row=mysqli_fetch_array($result)){
			echo '<img height = "300" width = "300" src="data:image1;base64,'.$row['first_image_file'].'" >';
			sleep(10);
    		flush();
   			ob_flush();
		}
		}
		?>

 </body>
 </html>
