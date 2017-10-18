<html>
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
				url:'music_search_logged.php',
				data:{search:search},
				type:'POST',
				success:function(data){
					if(!data.error){
					$(".dropdown-content").css('display', 'block');
					$('#result').html(data);	
					 if($('#search').val() == ''){
				 	 $(".dropdown-content").css('display', 'none');					 	
					 }
					}
				}

			});

    });	

	});

	</script>

<style>	
.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 140px;
			box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.2);
			padding: 1px 16px;
			z-index: 1;
			top:10px;
		}

		input:focus .dropdown-content {
			display: block;
		}

		#wow{
			position: absolute;
			top:100px;
			right: 54px;
		}
</style>


</head>
<body>

<div id="wow">
				<input type="text" id="search" name="search" placeholder="Search Music">
				<div>
					<p class="dropdown-content" id="result"></p>
				</div>
</div>
</body>
</html>