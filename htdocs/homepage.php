<?php
session_start();

    if(isset($_COOKIE['username'])) 
    {
              $_SESSION['username']=$_COOKIE['username'];
                 header('Location: logged.php');
    } 

    if (isset($_SESSION['username'])) 
    {
        header('Location: logged.php'); 
    }
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>

<?php 

		 $connection=mysqli_connect('localhost','root','','music');
	 ?>


	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
 <script>
	$(document).ready(function(){
				
		$('#search').keyup(function(){

			var search = $('#search').val();

			$.ajax({
				url:'music_search.php',
				data:{search:search},
				type:'POST',
				success:function(data){
					if(!data.error){
					$(".dropdown-content-search").css('display', 'block');
					$('#result').html(data);	
					 if($('#search').val() == ''){
				 	 $(".dropdown-content-search").css('display', 'none');					 	
					 }
					}
				}

			});

    });	

	});

</script>
	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Homepage</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<style>
	    .dropdown-search {
			position: relative;
			display: inline-block;
		}
        

		.dropdown-content-search {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 140px;
			box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.2);
			z-index: 1;
			top:30px;
		}

		input:focus .dropdown-content-search {
			display: block;
		}

		#me{
			position: absolute;
			top:18px;
		}
</style>


</head>

<body>

<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i>Musi<span>c</span>Cascade</i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
          <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
          <li><a href="#songs" class="scroll-link">Songs</a></li>
          <li><a href="#lyrics" class="scroll-link">Lyrics</a></li>
          <li><a href="#remix" class="scroll-link">Remix</a></li>
          <li><a href="#mood" class="scroll-link">Mood & Environment</a></li>
          <li><a href="reg.php" class="scroll-link">Sign Up</a></li>
		  <li><a href="log.php" class="scroll-link">Sign In</a></li>
		  <li><div id="me">
				<input style="border: 5px solid #FF6347; width: 120px" type="text" id="search" name="search" placeholder="Search Music">
				<div>
					<p class="dropdown-content-search" id="result"></p>
				</div>
                </div></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> <img src="images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="font-size: 40px;">Get yourself drunk in the Cascading music
         </h1>
      </div> 
    </div>
  </div>
  <div class="container hero-text2">
  <h3>Get your instant mood songs. Get lyrics. <br/> Download in the easiest way</h3>
  </div>
</section>

<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <div style="background-color:#C71585">
       
      <h2>About Us</h2>
      <p style="color:white">Our words,Our promises</p>
      </div>
    </div>
    <div class="row feature design">
      <div class="area1 columns right">
        <h3>Some words about us</h3>
        <p>We have started our journey with a new spirit. Hope, we have given you a heavenly cascade of music.</p>
        <p>With the blessings of almighty,  and last but not the least, you, our audience's blessings,will show us golden rays of the sun.May both of you n we get wet with that heavenly rays.</p>
          
      </div>
      <div class="area2 columns feature-media left"> <img src="images/feature-img-1.png" alt="" width="100%"> </div>
    </div>
    <div class="row dataTxt">	
						<div class="col-md-4 col-sm-6">
							<h4>What We Do?</h4>
							<p>We bring together your favourite music services and join up listening, watching and sharing to connect your musical world.</p>

                            <p>you can visualise, in real-time, the listening habits & trends of Last.fm's global community. Go Explore.</p>
							
							<br>
						</div>
						
						<div class="col-md-4 col-sm-6">
							
							<h4>Why Choose Us?</h4>
							<p>We’re entirely powered by our community of music lovers</p>
                            <ul class="listArrow">
								<li>You can get your instant mood songs!Even according to your suitable environment!</li>
								<li>You can get easily the lyrics of your fav songs</li>
								<li>Can also search for the remix of your favourite song!!</li>
								<li>Download easily n instantly</li>
								<li>If you have any complain or suggesion about our website can inform us instantly through email</li>
							</ul>
							<!-- Accordion starts -->
							</div>
						
						<div class="col-md-4 col-sm-6">
							<h4>Internal Theme</h4>
							<p>Each options has been categorized n designed according to top 10 of all category, So please rate your favourites!</p>
							
						</div>
						
					</div>
  </div>
</section>
<?php
	$band = "Band";
	$bfolk = "Bangla Folk";
	$modern = "Modern";
	$nazrul = "Nazrul";
	$patriotic = "Patriotic";
	$tagore = "Tagore";
	
	$blues = "Blues";
	$country = "Country";
	$electronica = "Electronica";
	$efolk = "English Folk";
	$hiphop = "Hip hop";
	$pop = "Pop";
	$rock = "Rock";
?>


<section id="songs">
  <div class="container" >
  <!-- Heading -->
    <div class="heading text-center"> 
	    <div style="background-color:#C71585">
            <h2>Songs</h2>
            <p style="color:white">Get your fav songs</p>
        </div>
	</div>
	<div style="background-color: #4CAF50; padding: 10px 10px 10px 10px">
	<div class="dropdown" style="float:right;">
          <button class="dropbtn">Genre</button>
			<div class="dropdown-content">
               <a href="b_genre.php?b_genre=<?php echo"$band"; ?>">Band</a>
			   <a href="b_genre.php?b_genre=<?php echo"$bfolk"; ?>">Bangla Folk</a>
			   <a href="b_genre.php?b_genre=<?php echo"$modern"; ?>">Modern</a>
			   <a href="b_genre.php?b_genre=<?php echo"$nazrul"; ?>">Nazrul</a>
			   <a href="b_genre.php?b_genre=<?php echo"$patriotic"; ?>">Patriotic</a>
               <a href="b_genre.php?b_genre=<?php echo"$tagore"; ?>">Tagore</a> 
           </div>
       </div>
	<h2 style="color:white">Bangla Recent Songs</h2>
	</div>
	<br>
	<table>
			  <tr>
                  <th>Song</th>
                  <th>Artist</th>
                  <th>Play</th>
              </tr>
	  	<?php	
			$connection=mysqli_connect('localhost','root','','music');
			$language = 'Bangla';
			$query = "SELECT * FROM myadmin WHERE language='{$language}' ORDER BY id DESC ";	
			$result =mysqli_query($connection,$query);
			 $i=1;
			while($row=mysqli_fetch_array($result)){
					$id = $row['id'];
					$music_name = $row['music_name'];
                    $artist_name = $row['artist_name'];						
					$i++;					
					if($i==7){
						break;
					}
			?>
			
			<tr>
                  <td><?php echo "$music_name"; ?></td>
                  <td><?php echo "$artist_name";  ?></td>
                  <td><a href="play.php?p_id=<?php echo "$id"; ?>">Play</a></td>
              </tr>
			<?php } 
			
			?>
			
			</table>
			<br>
			<a href="all_bangla.php" <button class="button" style="vertical-align:middle"><span>Show all songs</span></button></a>
			
			<br><br>
			
		<div style="background-color: #4CAF50; padding: 10px 10px 10px 10px">
	<div class="dropdown" style="float:right;">
          <button class="dropbtn">Genre</button>
           <div class="dropdown-content">
		       <a href="e_genre.php?e_genre=<?php echo"$blues"; ?>">Blues</a>
			   <a href="e_genre.php?e_genre=<?php echo"$country"; ?>">Country</a>
			   <a href="e_genre.php?e_genre=<?php echo"$electronica"; ?>">Electronica</a>
			   <a href="e_genre.php?e_genre=<?php echo"$efolk"; ?>">English Folk</a>
			   <a href="e_genre.php?e_genre=<?php echo"$hiphop"; ?>">Hip hop</a>
               <a href="e_genre.php?e_genre=<?php echo"$pop"; ?>">Pop</a> 
			   <a href="e_genre.php?e_genre=<?php echo"$rock"; ?>">Rock</a> 
           </div>
       </div>
	<h2 style="color:white">English Recent Songs</h2>
	</div>
	<br>
	<table>
			  <tr>
                  <th>Song</th>
                  <th>Artist</th>
                  <th>Play</th>
              </tr>
	  	<?php	
			$connection=mysqli_connect('localhost','root','','music');
			$language = 'English';
			$query = "SELECT * FROM myadmin WHERE language='{$language}' ORDER BY id DESC ";	
			$result =mysqli_query($connection,$query);
			 $i=1;
			while($row=mysqli_fetch_array($result)){
					$id = $row['id'];
					$music_name = $row['music_name'];
                    $artist_name = $row['artist_name'];					
					$i++;					
					if($i==7){
						break;
					}
			?>
			
			<tr>
                  <td><?php echo "$music_name"; ?></td>
                  <td><?php echo "$artist_name";  ?></td>
                  <td><a href="play.php?p_id=<?php echo "$id"; ?>">Play</a></td>
              </tr>
			<?php } 
			
			?>
			</table>
			<br>
			<a href="all_english.php" <button class="button" style="vertical-align:middle"><span>Show all songs</span></button></a>
			
    </div> 
  </div>
</section>

<br><br><br><br><br><br><br><br><br>


<section id="lyrics">
 <div class="container" >
  <!-- Heading -->
    <div class="heading text-center"> 
	    <div style="background-color:#C71585">
            <h2>Lyrics</h2>
            <p style="color:white">Get your lyrics</p>
        </div>
	</div>
	<div style="background-color: #4CAF50; padding: 10px 10px 10px 10px">
	<h2 style="color:white">Bangla Recent Songs lyrics</h2>
	</div>
	<br>
	<table>
			  <tr>
                  <th>Song</th>
                  <th>Artist</th>
                  <th>Lyrics</th>
              </tr>
	  	<?php	
			$connection=mysqli_connect('localhost','root','','music');
			$language = 'Bangla';
			$query = "SELECT * FROM myadmin WHERE language='{$language}' ORDER BY id DESC ";	
			$result =mysqli_query($connection,$query);
			 $i=1;
			while($row=mysqli_fetch_array($result)){
					$id = $row['id'];
					$music_name = $row['music_name'];
                    $artist_name = $row['artist_name'];						
					$i++;					
					if($i==7){
						break;
					}
			?>
			
			<tr>
                  <td><?php echo "$music_name"; ?></td>
                  <td><?php echo "$artist_name";  ?></td>
                  <td><a href="lyrics.php?p_id=<?php echo "$id"; ?>">Lyrics</a></td>
              </tr>
			
			<?php } 
			
			?>
			</table>
			<br>
			<a href="all_bangla_l.php" <button class="button" style="vertical-align:middle"><span>Show all songs</span></button></a>
			
		<div style="background-color: #4CAF50; padding: 10px 10px 10px 10px">
	<h2 style="color:white">English Recent Songs Lyrics</h2>
	</div>
	<br>
	<table>
			  <tr>
                  <th>Song</th>
                  <th>Artist</th>
                  <th>Lyrics</th>
              </tr>
	  	<?php	
			$connection=mysqli_connect('localhost','root','','music');
			$language = 'English';
			$query = "SELECT * FROM myadmin WHERE language='{$language}' ORDER BY id DESC ";	
			$result =mysqli_query($connection,$query);
			 $i=1;
			while($row=mysqli_fetch_array($result)){
					$id = $row['id'];
					$music_name = $row['music_name'];	
                    $artist_name = $row['artist_name'];						
					$i++;					
					if($i==7){
						break;
					}
			?>
			
			<tr>
                  <td><?php echo "$music_name"; ?></td>
                  <td><?php echo "$artist_name";  ?></td>
                  <td><a href="lyrics.php?p_id=<?php echo "$id"; ?>">Lyrics</a></td>
              </tr>
			<?php } 
			
			?>
			</table>
			<br>
			<a href="all_english_l.php" <button class="button" style="vertical-align:middle"><span>Show all songs</span></button></a>
    </div> 
  </div>
</section>
  

 <section id="remix">
 <div class="container" >
  <!-- Heading -->
    <div class="heading text-center"> 
	    <div style="background-color:#C71585">
            <h2>Remix</h2>
            <p style="color:white">Get the remix version of your fav song</p>
        </div>
	</div>
	<div style="background-color: #4CAF50; padding: 10px 10px 10px 10px">
	<h2 style="color:white">Recent Songs</h2>
	</div>
	<br>
	<br>
	
	<table>
			  <tr>
                  <th>Song</th>
                  <th>Artist</th>
                  <th>Play</th>
              </tr>
	
	  	<?php	
			$connection=mysqli_connect('localhost','root','','music');
			$version = 'Remix';
			$query = "SELECT * FROM myadmin WHERE version='{$version}' ORDER BY id DESC ";	
			$result =mysqli_query($connection,$query);
			 $i=1;
			while($row=mysqli_fetch_array($result)){
					$id = $row['id'];
					$music_name = $row['music_name'];
                    $artist_name = $row['artist_name'];						
					$i++;					
					if($i==7){
						break;
					}
			?>
              <tr>
                  <td><?php echo "$music_name"; ?></td>
                  <td><?php echo "$artist_name";  ?></td>
                  <td><a href="play.php?p_id=<?php echo "$id"; ?>">Play</a></td>
              </tr>
			<?php } 
			
			?>
			</table>
			<br>
			<a href="all_remix.php" <button class="button" style="vertical-align:middle"><span>Show all songs</span></button></a>
   
  </div>
</section>

<br><br><br><br><br><br><br><br><br>


<?php
	$broken = "Broken";
	$dancing = "Dancing";
	$depressed = "Depressed";
	$inspired = "Inspired";
	$party_mood = "Party mood";
	$refreshed = "Refreshed";
	$romantic = "Romantic";
	$sleepy = "Sleepy";
	$tired = "Tired";
	
	
	$adieu = "Adieu";
	$boat_journey = "Boat journey";
	$bus_journey = "Bus journey";
	$party = "Party";
	$rainy_day = "Rainy day";
	$romantic_environment = "Romantic environment";
	$victory_day = "Victory day";
	$leisure_time = "Leisure time";
?>



<section id="mood">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <div style="background-color:#C71585">       
      <h2>Mood & Environment</h2>
      <p style="color:white">Get your instant mood songs</p>
      </div>
    </div> 
	<div class="dropdown" style="background-color: #4CAF50; padding:3px 3px 3px 3px;float:left;">
          <button class="dropbtn">What are you feeling now !!</button>
			<div class="dropdown-content">
               <a href="ffeeling.php?ffeeling=<?php echo"$broken"; ?>">Broken</a>
			   <a href="ffeeling.php?ffeeling=<?php echo"$dancing"; ?>">Dancing</a>
			   <a href="ffeeling.php?ffeeling=<?php echo"$depressed"; ?>">Depressed</a>
			   <a href="ffeeling.php?ffeeling=<?php echo"$inspired"; ?>">Inspired</a>
			   <a href="ffeeling.php?ffeeling=<?php echo"$party_mood"; ?>">Party mood</a>
               <a href="ffeeling.php?ffeeling=<?php echo"$refreshed"; ?>">Refreshed</a> 
			   <a href="ffeeling.php?ffeeling=<?php echo"$romantic"; ?>">Romantic</a>
			   <a href="ffeeling.php?ffeeling=<?php echo"$sleepy"; ?>">Sleepy</a>
               <a href="ffeeling.php?ffeeling=<?php echo"$tired"; ?>">Tired</a> 
           </div>
       </div>
		
	<div class="dropdown" style="background-color: #4CAF50; padding: 3px 3px 3px 3px;float:right;">
          <button class="dropbtn">Choose your activity/environment</button>
			<div class="dropdown-content">
               <a href="aactivity.php?aactivity=<?php echo"$adieu"; ?>">Adieu</a>
			   <a href="aactivity.php?aactivity=<?php echo"$boat_journey"; ?>">Boat journey</a>
			   <a href="aactivity.php?aactivity=<?php echo"$bus_journey"; ?>">Bus journey</a>
			   <a href="aactivity.php?aactivity=<?php echo"$party"; ?>">Party</a>
			   <a href="aactivity.php?aactivity=<?php echo"$rainy_day"; ?>">Rainy day</a>
               <a href="aactivity.php?aactivity=<?php echo"$romantic_environment"; ?>">Romantic environment</a> 
			   <a href="aactivity.php?aactivity=<?php echo"$victory_day"; ?>">Victory day</a>
               <a href="aactivity.php?aactivity=<?php echo"$leisure_time"; ?>">Leisure time</a>
           </div>
       </div>
	   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
  </div>
</section>


<footer>
<div class="container">
        <div class="row">
            <div class="col-md-3">
            	<div class="col">
                   <h4>Contact us</h4>
                   <ul>
                        <li>House no. 16, Road 02, Sector 10, Uttara-Dhaka</li>
                        <li>Phone: +880 1863479806 | Fax: +880 724 2342 343 </li>
                        <li>Email: <a href="arunima1590@gmail.com" title="Email Us">arunima1590@gmail.com.com</a></li>
                        <li>Skype: <a href="skype:my.test?call" title="Skype us">me</a></li>
                    </ul>
                 </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col">
                    <h4>More about us</h4>
                    <p>To know more about us, please email us</p>
                    
                </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col col-social-icons">
                    <h4>Follow us</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
               
                </div>
            </div>

             <div class="col-md-3">
             	<div class="col">
                    <h4>Latest News</h4>
                    <p>
                    New song of Shakira "My heart" is coming soon !!
                    <br><br>
                    </p>
                </div>
            </div>
        </div>
         
    </div>
    
</footer>
<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2014 | All Rights Reserved -- by <a href="http://arunima1590@gmail.com.com">arunima1590@gmail.com</a> </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
