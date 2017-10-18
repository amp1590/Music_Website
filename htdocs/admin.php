	<?php
	if(isset($_POST['submit'])) {
	$post_language =  $_POST['language'];
	$music_name = $_POST['name'];
	$artist_name = $_POST['artist_name'];
	$lyrics_file = $_POST['lyrics_file'];
	$music_file = $_POST['file'];
	$duration = $_POST['duration'];
	$version = $_POST['version'];
	$post_catagory = $_POST['catagory'];
	$post_feeling = $_POST['feeling'];
	$post_activity = $_POST['activity/environment'];
	
	$connection=mysqli_connect('localhost','root','','music');
	$query = "INSERT INTO myadmin(language,music_name,artist_name,lyrics_file,music_file,duration,version,catagory,feeling,activity) VALUES('$post_language','$music_name','$artist_name','$lyrics_file','$music_file','$duration','$version','$post_catagory','$post_feeling','$post_activity')";
	$result = mysqli_query($connection,$query);

	}

	?>

		<html>
		<div style="background-color:#000080">
		<h1 style="text-align:center; color:white">Update Database</h1>
		</div>
		
	    <div style="background-color:#7B68EE" class="heading text-center">
		<form action="admin.php" method="POST">
		Select language<br>
		<input list="language" name="language" id="lang" placeholder="Language" />
		<datalist id="language">
        <option value="Bangla">Bangla</option>
        <option value="English">English</option>
		</datalist><br><br>
		
		Music name<br>
		<input type="text" name="name" id="song" placeholder="Music name"><br><br>
		Artist name<br>
		<input type="text" name="artist_name" id="Artist" placeholder="Artist name"><br><br>
		Lyrics file name<br>
		<input type="text" name="lyrics_file" id="l_file" placeholder="Lyrics file"><br><br>
		Music file name<br>
		<input type="text" name="file" id="m_file" placeholder="Music file"><br><br>
		Duration<br>
		<input type="text" name="duration" id="Duration" placeholder="Duration"><br><br>
		Version<br>
		<input list="version" name="version" id="Version" placeholder="Version" />
		<datalist id="version">
        <option value="Original">Original</option>
        <option value="Remix">Remix</option> 
		</datalist><br><br>
		
		Catagory<br>
		<input list="catagory" name="catagory" id="Datalist" placeholder="Catagory" />
		<datalist id="catagory">
        <option value="Tagore">Tagore</option>
        <option value="Nazrul">Nazrul</option> 
		<option value="Bangla Folk">Bangla Folk</option>
        <option value="Patriotic">Patriotic</option> 
		<option value="Modern">Modern</option> 
        <option value="Band">Band</option>
		
		<option value="Blues">Blues</option> 
		<option value="Country">Country</option>
		<option value="Electronica">Electronica</option>
		<option value="English Folk">English Folk</option> 
		<option value="Hip hop">Hip hop</option>
		<option value="Pop">Pop</option>
        <option value="Rock">Rock</option>		
		</datalist><br><br>
		
		What are you feeling now!!!<br>
		<input list="feeling" name="feeling" id="Feeling" placeholder="What are you feeling now" />
		<datalist id="feeling">
		<option value="Broken">Broken</option> 
		<option value="Dancing">Dancing</option>
		<option value="Depressed">Depressed</option> 
		<option value="Inspired">Inspired</option>
		<option value="Party mood">Party mood</option> 
		<option value="Refreshed">Refreshed</option>
		<option value="Romantic">Romantic</option>
		<option value="Sleepy">Sleepy</option> 
        <option value="Tired">Tired</option>
		</datalist><br><br>
		
		Choose your activity/environment<br>
		<input list="activity/environment" name="activity/environment" id="Activity" placeholder="Activity/Environment" />
		<datalist id="activity/environment">
		<option value="Adieu">Adieu</option>
        <option value="Boat journey">Boat journey</option>
        <option value="Bus journey">Bus journey</option>
        <option value="Party">Party</option> 
		<option value="Rainy day">Rainy day</option>
		<option value="Romantic environment">Romantic environment</option>
		<option value="Victory day">Victory day</option>
		<option value="Leisure time">Leisure time</option>
		</datalist><br><br>
		
		<div class="clear"> </div>
			<div class="Submit">
				<input type="submit" name="submit" onclick="myFunction()" value="Submit" style="background-color:	#0000FF" >
			<div class="clear">  </div>	
						  
		</div>
		</form>
	</div>
	
	
</html>
