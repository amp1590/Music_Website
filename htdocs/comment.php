		<?php 
		session_start();
		$connection=mysqli_connect('localhost','root','','music');	
		if(isset($_GET['comment_submit'])){
		$comment = $_GET['post_comment'];
		$comment_post_id =$_GET['p_id'];
		$comment_author =  $_SESSION['username'];
		$connection=mysqli_connect('localhost','root','','music');
		$query = "INSERT INTO comment(comment_post_id,comment_content,comment_author) VALUES('$comment_post_id','$comment','$comment_author')";
		$result = mysqli_query($connection,$query);
		$_SESSION['p_id'] = $comment_post_id;
		header('location:play_logged.php');
	
	}
		
	?>
