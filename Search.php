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
		<?php include("Navbar.php");?>
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
