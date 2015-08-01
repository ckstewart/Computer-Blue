<!DOCTYPE html>
<html lang="en">
	<?php 
		require_once "connectdb.php";
		//$_SESSION["NAME"];
		
		
		?>
	<head>
		<title>Travel Advisor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			.navbar-brand {
                font-size: 2.5em;
			}
            body {
                padding-top: 130px;
            }
			h2 {
			color: firebrick;
			}
            #myCarousel3 {
                align:center;
                width:99%;
            }
            .carousel-inner > .item > img {
                margin: 0 auto;
            }
		</style>
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Travel Advisor</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="Home.php">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Attractions & Activities<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="Sports.php">Sports</a></li>
								<li><a href="Restaurants.php">Restaurants</a></li>
								<li><a href="Theme%20Park.php">Theme Park</a></li>
								<li><a href="Sight%20Seeing.php">Sight Seeing</a></li>
								<li><a href="Outdoor%20Activities.php">Outdoor Activities</a></li>
								<li><a href="Theater.php">Theater</a></li>
								<li><a href="Art%20and%20History.php">Art and History</a></li>
								<li><a href="Recreation.php">Recreation</a></li>
								<li><a href="Shopping.php">Shopping</a></li>
								<li><a href="Night%20Life.php">Night Life</a></li>
							</ul>
						</li>
						<li>
                            <?php if(!$_SESSION['NAME']) {?>
                                <a href="Login.php">Log In</a>
                            <?php } ?>
                            <?php if($_SESSION['NAME']) {?>
                                <a href="logout.php">Log Out</a>
                            <?php } ?>
                        </li>
						<li>
                            <?php 
                            if (!$_SESSION['NAME']) {?> 
                                <a href="Signup.php">Sign Up</a> <?php }
                            ?>
                        </li>
					</ul>
				</div>
			</div>
		</div>
        <div id = "myCarousel3" class = "carousel slide container">
			<ol class = "carousel-indicators">
				<li data-target = "#myCarousel3" data-slide-to = "0" class = "active"></li>
				<li data-target = "#myCarousel3" data-slide-to = "1"></li>
				<li data-target = "#myCarousel3" data-slide-to = "2"></li>
				<li data-target = "#myCarousel3" data-slide-to = "3"></li>
			</ol>
			<div class = "carousel-inner">
				<div class = "item active">
					<img src = "img/skyline-1.jpg"class = "img-responsive">
				</div>
				<div class = "item">
					<img src = "img/skyline-2.jpg"class = "img-responsive">
				</div>
				<div class = "item">
					<img src = "img/skyline-3.jpg" class = "img-responsive">
				</div>
				<div class = "item">
					<img src = "img/skyline-4.jpg" class = "img-responsive">
				</div>
			</div>
			<a class = "carousel-control left" href = "#myCarousel3" data-slide = "prev"></a>
			<a class = "carousel-control right" href = "#myCarousel3" data-slide = "next"></a>
		</div>
        <div class="container">
            <center><h1>Orlando, Florida</h1></center>
        </div>
        <div class="container" width="50%">
            <h3><small>About Travel Advisor</small></h3>
            <blockquote id = "about">
				<small>Our aim is to offer a fast and efficient web-based solution to promote a city or area. Our webpages provide an attractive and user-friendly solution for travelers to locate points of interest and find desireable lodging.</small>
			</blockquote>
        </div>
	</body>
</html>
