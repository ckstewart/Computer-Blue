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
		<?php include("Navbar.php");?>
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
