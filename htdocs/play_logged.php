<?php
      session_start();
		if(isset($_SESSION['p_id'])){
			$id = $_SESSION['p_id'];
		}

		if(isset($_GET['p_id'])){
			$id = $_GET['p_id'];
		}


	$connection = mysqli_connect('localhost','root','','music');
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
<div style="float:right;">
<h2 style="color: white">Lyrics</h2>
<?php
$myfile = fopen("$lyrics_file", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</div>
<div>
<h3>Song : </h3><p style="color:white"><?php echo "$music_name" ?></p>
</div>
<div >
<h3> Artisrt : </h3><p style="color:white"><?php echo "$artist_name" ?></p>
</div>
<div >
<h3> Duration: </h3><p style="color:white"><?php echo "$duration" ?></p>
</div><br>
<div >
<h2> Play: </h2>
<audio controls>
  <source src="<?php echo "$music_file"; ?>" type="audio/mpeg">
   Your browser does not support the audio element.
</audio>
</div><br>


<div >
<h3> Comment </h3>
</div><br>

<!-- Comments Form -->
              <div class="well">
                    <form role="form" method="GET" action="comment.php" name="comment_form" id="comment_box">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" cols="80" style="border: 5px solid #FF6347" name="post_comment" placeholder="Leave a comment"></textarea>
                            <button type="submit" name="comment_submit" class="btn btn-primary">comment</button>
                            <input type="hidden" name="p_id" value="<?php echo "$id"; ?>">                       
					   </div>
                        <br></br>
                        
                    	<h3>Comments:</h3>
                    </form>
					
					
                <?php 

			$query = "SELECT * FROM comment WHERE comment_post_id ='{$id}' ";
			$catagories_query = mysqli_query($connection,$query);

			while($row=mysqli_fetch_assoc($catagories_query)){
			$post_content = $row['comment_content'];
			$post_author = $row['comment_author'];
		  ?>

		  <div id="post">
			<p style="color:white"><?php  echo "$post_author : "; echo "$post_content";  ?></p>
			
		</div>

		<?php } ?>

					
					
               

                </div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
</body>
</html>

