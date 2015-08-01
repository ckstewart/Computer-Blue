<?php 
    
    require_once "connectdb.php";
if(!$_SESSION['EMAIL']){header("Location:login.php");}
   
$user = ucfirst($_SESSION['EMAIL']);

$sql = "Select * from bookings where bemail ='$user'";

$sql2= "SELECT * FROM comments where pemail ='$user'";

$result=mysqli_query($db,$sql);//bookings
$result2=mysqli_query($db,$sql2);//comments

if (isset($_POST['submit']))
  {
    $saveto = ucfirst("$user.jpg");
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $saveto);
    $typeok = TRUE;

    switch($_FILES['fileToUpload']['type'])
    {
      case "image/gif":   $src = imagecreatefromgif($saveto); break;
      case "image/jpeg":  // Both regular and progressive jpegs
      case "image/pjpeg": $src = imagecreatefromjpeg($saveto); break;
      case "image/png":   $src = imagecreatefrompng($saveto); break;
      default:            $typeok = FALSE; break;
    }

    savephoto($db,$saveto);
    changephoto($db,$user);
    
  }

    $photo = $_SESSION['PHOTO'];


?>

<!DOCTYPE html>
<html>
    <head>
    <title>Travel Advisor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="profile.css" type="text/css">
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
						<li class = "aus"><a href = "">Currently Viewing: Your Profile</a></li>
					</ul>
				</div>
			</div>
		</div>
    <!-- End of nav -->
        
        
        <div id="main">
            
            <?php echo"<img src='$photo' width='150px' style='border-radius:25px' onclick='showbuttons();'>"; ?>
            <h6>Click image to change</h6>
            
        </div>
        
        <div id="upload" style="margin-left:auto; margin-right:auto; width:140px;">
            
            <br>    
            
            <form id="newimage" action="profile.php" method="post" enctype="multipart/form-data">
                
                <input type="file" name="fileToUpload" id="fileToUpload" style="visibility:hidden" onclick='showbutton();' >
                <input type="submit" value="Save Image" name="submit" style="visibility:hidden" id="submit" onblur="hidebuttons();">
            </form>
            
            
        </div>

        <div id="name" style="margin-top:20px;">
            
            
            <?php echo $_SESSION['NAME']; ?>
            <br>
            <br>
        </div>
        
        
        
        <div id="feed">
            <br>
            <h1 align="center">Recent Activities</h1>
            <br>
            <br>
            <br>
            <div id="bookings">
                <h3 align="center">Bookings</h3>
                
                <?php 
                    
                        while($bookings = $result->fetch_assoc())
                        {echo "<p><em>You have Booked The ". $bookings['hotel']." on ". $bookings['date']."</em></p>";}
                ?>
            </div>
            
            <div id="comments">
                <h3 align="center">Comments</h3>
                
                <?php 
                    
                        while($comments = $result2->fetch_assoc())
                        {echo "<p> Comment: <em>". $comments['comment']." ".$comments['cdate']."(".$comments['place'].")"."</em></p>";}
                ?>
            </div>
        
        </div>
        
        <script>
        function showbutton()
            {
                
                var y = document.getElementById("submit").style.visibility = "visible";
    
                
            }
            
            function showbuttons()
            {
                 
                var y = document.getElementById("fileToUpload").style.visibility = "visible";
    
                
            }
            
            function hidebuttons()
            {
                var y = document.getElementById("submit").style.visibility = "hidden";
                var y = document.getElementById("fileToUpload").style.visibility = "hidden";
            }
        
        </script>
    
    </body>
</html>