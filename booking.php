<?php 
    
    require_once "connectdb.php";
$date = date("y/m/d");

$email = $_SESSION['EMAIL'];

if(isset($_POST['rosenInn']))
    {
    if(!$_SESSION['EMAIL']){header("Location:Login.php");break;}
    $email = $_SESSION['EMAIL'];
    $hotel = "Rosen Inn at Pointe Orlando";
    $sql = "insert into bookings(bemail,hotel,rating,date) values ('$email','$hotel','NULL','$date')";
    mysqli_query($db,$sql);
    echo "<script> alert('You have booked The $hotel') </script>";
    }
if(isset($_POST['rosenInnrate']))
{   $rate = $_POST['rosenInnrate'];
    $sql = "UPDATE bookings SET rating = '$rate' WHERE bemail = '$email' and hotel = 'Rosen Inn at Pointe Orlando'";
    mysqli_query($db,$sql);
}

if(isset($_POST['hardRock']))
    {
    if(!$_SESSION['EMAIL']){header("Location:Login.php");break;}
    $email = $_SESSION['EMAIL'];
    $hotel = "Hard Rock Hotel At Universal Orlando Resort";
    $sql = "insert into bookings(bemail,hotel,rating,date) values ('$email','$hotel','NULL','$date')";
    mysqli_query($db,$sql);
    echo "<script> alert('You have booked The $hotel') </script>";
    }
if(isset($_POST['hardRockrate']))
{   $rate = $_POST['hardRockrate'];
    $sql = "UPDATE bookings SET rating = '$rate' WHERE bemail = '$email' and hotel = 'Hard Rock Hotel At Universal Orlando Resort'";
    mysqli_query($db,$sql);
}

if(isset($_POST['nickelodeon']))
    {
    if(!$_SESSION['EMAIL']){header("Location:Login.php");break;}
    $email = $_SESSION['EMAIL'];
    $hotel = "Nickelodeon Suites Resort";
    $sql = "insert into bookings(bemail,hotel,rating,date) values ('$email','$hotel','NULL','$date')";
    mysqli_query($db,$sql);
    echo "<script> alert('You have booked The $hotel') </script>";
    }
if(isset($_POST['nickelodeonrate']))
{   $rate = $_POST['nickelodeonrate'];
    $sql = "UPDATE bookings SET rating = '$rate' WHERE bemail = '$email' and hotel = 'Nickelodeon Suites Resort'";
    mysqli_query($db,$sql);
}

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
    
    </head>
    
    <body>
        <?php include("Navbar.php");?>
    <!-- End of nav -->
        <br><br>
    <h1 align="center">Welcome to the Booking Page</h1>
        <br><br>
        <div class="col-md-4">
            
            <img src="img/rosenInn.jpg" width="90%" height="230px" style="margin-left:20px; margin-right:auto;">
            <h3 align="center">Book The Rosen Inn at Pointe Orlando</h3>
            <h5 align="center">Close to</h5>
            <ul>
            <li>The Ice Bar</li>
            <li>Downtown Orlando</li>
            <li></li>
            <li></li>
                <h5>Regular price 100$/night</h5>
                <h5>Travel Advisor price 100$/night</h5>
                <h5>Regular price 100$/night</h5>
                <h5>Travel Advisor price 100$/night</h5>
                <form id="rate" method="post" action="Booking.php">
                <?php 
                    $sql = "select * from bookings where bemail = '$email' and hotel = 'Rosen Inn at Pointe Orlando'";
                    $booked = mysqli_query($db,$sql);
$booked=$booked->fetch_assoc();
                        
                        if($booked)
                        {
                            echo "We've noticed you've booked here before.<br> How would you rate the area? ";
                            echo "<select name='rosenInnrate'><option value='1'>1</option>";
                            echo "<option value='2'>2</option>";
                            echo "<option value='3'>3</option>";
                            echo "<option value='4'>4</option>";
                            echo "<option value='5'>5</option>";
                            echo "</select>";
                            
                            
                            echo " <input type='submit' value='rate'><br><br>";
                        }

                ?>
                </form>
                <form method="post" action="Booking.php">
                <input type="submit" name="rosenInn" value="Book Now" >
                </form>
                
            </ul>
        
        </div>
    
    <div class="col-md-4">
            
            <img src="img/hardrock.jpg" width="90%" height="230px" style="margin-left:20px; margin-right:auto;">
            <h3 align="center">Hard Rock Hotel At Universal Orlando Resort</h3>
            <h5 align="center">Close to</h5>
            <ul>
            <li>The Ice Bar</li>
            <li>Downtown Orlando</li>
            <li></li>
            <li></li>
                <h5>Regular price 300$/night</h5>
                <h5>Travel Advisor price 260$/night</h5>
                <form id="rate" method="post" action="Booking.php">
                <?php 
                    $sql = "select * from bookings where bemail = '$email' and hotel = 'Hard Rock Hotel At Universal Orlando Resort'";
                    $booked2 = mysqli_query($db,$sql);
$booked2=$booked2->fetch_assoc();
                        
                        if($booked2)
                        {
                            echo "We've noticed you've booked here before.<br> How would you rate the area? ";
                            echo "<select name='hardRockrate'><option value='1'>1</option>";
                            echo "<option value='2'>2</option>";
                            echo "<option value='3'>3</option>";
                            echo "<option value='4'>4</option>";
                            echo "<option value='5'>5</option>";
                            echo "</select>";
                            
                            
                            echo " <input type='submit' value='rate'><br><br>";
                        }

                ?>
                </form>
                <form method="post" action="Booking.php">
                <input type="submit" name="hardRock" value="Book Now" >
                </form>
            </ul>
        
        </div>
    
    <div class="col-md-4">
            
            <img src="img/nickelodeon.jpg" width="90%" height="230px" style="margin-left:20px; margin-right:auto;">
            <h3 align="center">Nickelodeon Suites Resort</h3>
            <h5 align="center">Close to</h5>
            <ul>
            <li>The Ice Bar</li>
            <li>Downtown Orlando</li>
            <li></li>
            <li></li>
                <h5>Regular price 200$/night</h5>
                <h5>Travel Advisor price 147$/night</h5>
                <form id="rate" method="post" action="Booking.php">
                <?php 
                    $sql = "select * from bookings where bemail = '$email' and hotel = 'Nickelodeon Suites Resort'";
                    $booked3 = mysqli_query($db,$sql);
$booked3=$booked3->fetch_assoc();
                        
                        if($booked3)
                        {
                            echo "We've noticed you've booked here before.<br> How would you rate the area? ";
                            echo "<select name='nickelodeonrate'><option value='1'>1</option>";
                            echo "<option value='2'>2</option>";
                            echo "<option value='3'>3</option>";
                            echo "<option value='4'>4</option>";
                            echo "<option value='5'>5</option>";
                            echo "</select>";
                            
                            
                            echo " <input type='submit' value='rate'><br><br>";
                        }

                ?>
                </form>
                <form method="post" action="Booking.php">
                <input type="submit" name="nickelodeon" value="Book Now" >
                </form>
            </ul>
        
        </div>
        
        
    
    
    </body>
</html>