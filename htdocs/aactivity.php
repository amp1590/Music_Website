<?php
session_start();

    if(isset($_COOKIE['username'])) 
    {
              $_SESSION['username']=$_COOKIE['username'];
                 header('Location: aactivity_logged.php');
    } 

    if (isset($_SESSION['username'])) 
    {
        header('Location: aactivity_logged.php'); 
    }
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
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
<title><?php echo $_GET['aactivity'];?></title>
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
<div style="background-color:  #DA70D6">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i>Musi<span>c</span>Cascade</i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li><a href="homepage.php" class="scroll-link">Home</a></li>
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

<br><br><br><br><br><br><br>
<section>
  <div class="container" >
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
		
	<div class="dropdown" style="background-color: #4CAF50; padding:3px 3px 3px 3px;float:right;">
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
	   
	   <br><br><br>
		<div align="center">
		<h2>In a  <?php echo $_GET['aactivity'];?></h2 >
		
	<br>
	<table>
			  <tr>
                  <th>Song</th>
                  <th>Artist</th>
                  <th>Play</th>
              </tr>
	    
	</div>
	  	<?php	
			$connection=mysqli_connect('localhost','root','','music');
			$activity = $_GET['aactivity'];
			$query = "SELECT * FROM myadmin WHERE activity='{$activity}' ORDER BY id DESC ";	
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
		 </div> 
  </div>
</section>

<br><br><br>  


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
