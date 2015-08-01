<!DOCTYPE html>
<html lang="en">
    
    <?php 
    
    require_once "connectdb.php";

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
    
    h2 {
        position: absolute;
        right: 71%;
        margin-top: 100px;
        font-weight: bold;
        font-family: inherit;
        color: firebrick;
    }
    
    #quote1 {
    position: absolute;
        top: 25%;
    }
    
    #quote2 {
    position: absolute;
        top: 35%;
    }
    
    #quote3 {
    position: absolute;
        top: 45%;
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
								<li><a href="booking.php">Book Hotel</a></li>
							</ul>
						</li>
						<li>
                            <?php if(!$_SESSION['NAME']) {?>
                                <a href="Login.php">Log In</a>
                            <?php } ?>
                            <?php if($_SESSION['NAME']) {?>
                                <a href="profile.php">Profile</a>
                        <li><a href="logout.php">Log Out</a></li>
                            <?php } ?>
                        </li>
                        <li>
                            <?php 
                            if (!$_SESSION['NAME']) {?> 
                                <a href="signup.php">Sign Up</a> <?php }
                            ?>
                        </li>
						<li class = "aus"><a href = "">Currently Viewing: Search Page</a></li>
					</ul>
				</div>
			</div>
		</div>
    <!-- End of nav --> 
  
    <h2>Reviews of Travel Advisor:</h2>
    
   <div id = "q1"><blockquote id = "quote1">
  <p>The most efficient source engine on the market.</p>
  <small><cite title="Source Title">New York Times</cite></small>
       </blockquote></div>
    
<div id = "q2">   
<blockquote id = "quote2">
  <p>Takes the stress out of booking a trip for a vacation and lets you really enjoy the experience. </p>
  <small><cite title="Source Title">LA Times</cite></small>
    </blockquote></div>
    
   <div id = "q3"><blockquote id = "quote3">
  <p>Revolutionizes the way traveling is handled through the internet. </p>
  <small><cite title="Source Title">Washington Post</cite></small>
       </blockquote></div>
    
<script scr="js/jquery.js"></script>

</body>
</html>
