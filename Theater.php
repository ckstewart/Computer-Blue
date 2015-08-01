<!DOCTYPE html>

<html lang="en">
    
    <?php 
    
    require_once "connectdb.php";

 //require_once "connectdb.php";

        if(isset($_POST['comment']) && isset($_POST['rate']) && isset($_POST['event']))
            {
                addComment($_POST['comment'],$_POST['event'],$_POST['rate'],$db);
            }
getcomments($db);
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
			border: 0.25em double black;
			text-align: center;
			margin-top: 100px;
			}
			h3 {
			width: 30%;
			background-color: black;
			position: absolute;
			right: 35%;
			bottom: 25px;
			} 
            .carousel-inner > .item > img {
            /*  position: absolute;*/
                top: 0;
                left: 0;
                min-width: 40%;
                max-width: 100%;
                min-height: 380px;
                max-height: 380px;
                width: auto;
                margin-right:auto;
                margin-left:auto;
                height:auto;

            }
			#desc {
			font-weight: bold;
			text-decoration: underline;
			position: absolute;
			right: 47%;
			margin-top: 40px;
			}
			#rev {    
			font-weight: bold;
			text-decoration: underline; 
			position: absolute;
			right: 49%;
			margin-top: 30px;
			}
			.img-responsive {
			margin: auto;
			margin-top: 90px;
			}
			.nav-tabs {
			margin-left: 5%;
			margin-top: 5%;
			margin-right: 5%;
			}
			.detailBox {
			width:320px;
			border:1px solid #bbb;
			margin:50px;
			position: absolute;
			right: 35%;
			}
			.titleBox {
			background-color:#fdfdfd;
			padding:10px;
			}
			.titleBox label{
			color:#444;
			margin:0;
			display:inline-block;
			}
			.commentBox {
			padding:10px;
			border-top:1px dotted #bbb;
            width:60%;
			}
			.commentBox .form-group:first-child, .actionBox         .form-group:first-child {
			width:60%;
			}
			.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
			width:20%;
			}
			.actionBox .form-group * {
			width:100%;
			}
			.taskDescription {
			margin-top:10px 0;
			}
			.commentList {
			padding:0;
			list-style:none;
			max-height:200px;
			overflow:auto;
			}
			.commentList li {
			margin:0;
			margin-top:10px;
			}
			.commentList li > div {
			display:table-cell;
			}
			.commenterImage {
			width:30px;
			margin-right:5px;
			height:100%;
			float:left;
			}
			.commenterImage img {
			width:100%;
			border-radius:50%;
			}
			.commentText p {
			margin:0;
			}
			.sub-text {
			color:#aaa;
			font-family:verdana;
			font-size:11px;
			}
			.actionBox {
			border-top:1px dotted #bbb;
			padding:10px;
			}
			.aus {
			position: absolute;
			right: -20%;
			color: blue;
			}
            #myCarousel3 {     background:url(http://www.drphillipscenter.org/core/fileparse.php/98/urlt/0005003-disney-theater.jpg);
                
                
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
                                <a href="Signup.php">Sign Up</a> <?php }
                            ?>
                        </li>
						<li class = "aus"><a href = "">Currently Viewing: Theater</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Carousel -->
		<div id = "myCarousel3" class = "carousel slide container">
			<ol class = "carousel-indicators">
				<li data-target = "#myCarousel3" data-slide-to = "0" class = "active"></li>
				<li data-target = "#myCarousel3" data-slide-to = "1"></li>
				<li data-target = "#myCarousel3" data-slide-to = "2"></li>
				<li data-target = "#myCarousel3" data-slide-to = "3"></li>
			</ol>
			<div class = "carousel-inner">
				<div class = "item active">
					<img src = "img/nouba.jpg" alt = "Nouba" class = "img-responsive">
					<div class="carousel-caption">
						<h3>La Nouba Cirque Du Soleil</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/shakespeare.jpg" alt = "Orlando Shakespeare Theater" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando Shakespeare Theater</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/cow.jpg" alt = "Mad Cow Theater" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Mad Cow Theater</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/blueman.jpg" alt = "Blue Man Group" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Blue Man Group</h3>
					</div>
				</div>
			</div>
			<a class = "carousel-control left" href = "#myCarousel3" data-slide = "prev"></a>
			<span class = "icon-prev"></span>
			<a class = "carousel-control right" href = "#myCarousel3" data-slide = "next"></a>
			<span class = "icon-next"></span>
		</div>
		<!-- Descriptions -->
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#nouba" data-toggle="tab">La Nouba Cirque Du Soleil</a></li>
				<li><a href="#shakespeare" data-toggle="tab">Orlando Shakespeare Theater</a></li>
				<li><a href="#madcow" data-toggle="tab">Mad Cow Theater</a></li>
				<li><a href="#blueman" data-toggle="tab">Blue Man Group</a></li>
			</ul>
		</div>
		<div class="container nav-tabs">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="nouba">
					<p>A door opens and two worlds collide. Enter the attic of make-believe, where the mundane meets the marvellous. Dreams and nightmares intertwine. La Nouba which calls on both individual and collective memory, is an unforgettable journey into a world at once threatening and exhilarating, frightening and familiar. La Nouba beckons to us, challenges us to uncover passions we thought we had lost long ago; to frolic in our childhood dreams and enter a place where the extraordinary transforms and overcomes the ordinary.</p>
					<!--Magic Reviews -->
					<div class="actionBox">
						<ul class="commentList">
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
								</div>
								<div class="commentText">
									<p class="">The Orlando Magic are my favorite basketball team!</p>
									<span class="date sub-text">
										on March 5th, 2015
										<div class="glyphicon glyphicon-star">4</div>
									</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/7"/>
								</div>
								<div class="commentText">
									<p class="">Go Oladipo I'm from Indiana and he's a hometown hero.</p>
									<span class="date sub-text">
										on April 13th, 2015
										<div class="glyphicon glyphicon-star">3</div>
									</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/9" />
								</div>
								<div class="commentText">
									<p class="">Vucevic should have been an all-star!</p>
									<span class="date sub-text">
										on May 12th, 2014
										<div class="glyphicon glyphicon-star">5</div>
									</span>
								</div>
							</li>
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['La Nouba Cirque Du Soleil']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form" method="post" action="Theater.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="La Nouba Cirque Du Soleil">La Nouba Cirque Du Soleil</option>
                                    <option value="Orlando Shakespeare Theater">Orlando Shakespeare Theater</option>
                                    <option value="Mad Cow Theater">Mad Cow Theater</option>
                                    <option value="Blue Man Group">Blue Man Group</option>
                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
								
                            </div>
                                <select class="form-control" id="rate1" name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
                            <button class="btn btn-default" type="submit">Add</button>
						</form>
					</div>
					<!-- Magic Reviews -->
				</div>
				<div class="tab-pane fade" id="shakespeare">
					<p>With so many museums and theater groups located within Loch Haven, there is always something new to see or do, including yearly events such as the Orlando International Fringe Festival, Target Family Theatre Festival, Movie in the Park, Maker Faire Orlando, The Festival of Trees, and Antiques Show and Sale.</p>
					<div class="actionBox">
						<ul class="commentList">
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
								</div>
								<div class="commentText">
									<p class="">The UCF Knights football team is my favorite college sports team to follow!</p>
									<span class="date sub-text">on March 5th, 2015 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/7"/>
								</div>
								<div class="commentText">
									<p class="">Blake Bortles will carry the Jaguars in the upcoming years.</p>
									<span class="date sub-text">on April 13th, 2015 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/9" />
								</div>
								<div class="commentText">
									<p class="">Bernard Perriman our former Wide Receiver looks like the Predator from Alien vs Predator.</p>
									<span class="date sub-text">on May 12th, 2014 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Orlando Shakespeare Theater']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form" method="post" action="Theater.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="La Nouba Cirque Du Soleil">La Nouba Cirque Du Soleil</option>
                                    <option value="Orlando Shakespeare Theater">Orlando Shakespeare Theater</option>
                                    <option value="Mad Cow Theater">Mad Cow Theater</option>
                                    <option value="Blue Man Group">Blue Man Group</option>
                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
								
                            </div>
                                <select class="form-control" id="rate1" name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
                            <button class="btn btn-default" type="submit">Add</button>
						</form>
					</div>
				</div>
				<div class="tab-pane fade" id="madcow">
					<p>Mad Cow Theatre is one of Orlando’s most respected professional theatre companies presenting compelling works of theatre for a wide-range of audiences, with a passion for both classic and contemporary plays and musicals representing the best of American and World literature. </p>
					<div class="actionBox">
						<ul class="commentList">
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
								</div>
								<div class="commentText">
									<p class="">I was hoping Michael Jordan's kid panned out but he was a bum.</p>
									<span class="date sub-text">on March 5th, 2015 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/7"/>
								</div>
								<div class="commentText">
									<p class="">Why does this team continue to dissapoint me so much.</p>
									<span class="date sub-text">on April 13th, 2015 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/9" />
								</div>
								<div class="commentText">
									<p class="">Hey at least Michael Jordan used to show up court side sometimes.  That was the only plus.</p>
									<span class="date sub-text">on May 12th, 2014 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Mad Cow Theater']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form" method="post" action="Theater.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="La Nouba Cirque Du Soleil">La Nouba Cirque Du Soleil</option>
                                    <option value="Orlando Shakespeare Theater">Orlando Shakespeare Theater</option>
                                    <option value="Mad Cow Theater">Mad Cow Theater</option>
                                    <option value="Blue Man Group">Blue Man Group</option>
                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
								
                            </div>
                                <select class="form-control" id="rate1" name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
                            <button class="btn btn-default" type="submit">Add</button>
						</form>
					</div>
				</div>
				<div class="tab-pane fade" id="blueman">
					<p>Experience the mystery, the humor, the euphoria and the indescribable celebration of art, technology and music that is Blue Man Group at Universal Orlando® Resort. It combines science and laughter, and makes for an explosive evening of entertainment. Lose yourself in the incredible performances, the astounding music, and the captivating stage show. </p>
					<div class="actionBox">
						<ul class="commentList">
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
								</div>
								<div class="commentText">
									<p class="">As one of the few American soccer fans I'm glad I finally have a team in my home town.</p>
									<span class="date sub-text">on March 5th, 2015 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/7"/>
								</div>
								<div class="commentText">
									<p class="">Perfect place for a soccer team in a college and tourist town.</p>
									<span class="date sub-text">on April 13th, 2015 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/9" />
								</div>
								<div class="commentText">
									<p class="">The future is looking bright for us even though we are an expansion team.  Let's go OCSC!</p>
									<span class="date sub-text">on May 12th, 2014 <div class="glyphicon glyphicon-star">4</div></span>
								</div>
							</li>
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Blue Man Group']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form" method="post" action="Theater.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="La Nouba Cirque Du Soleil">La Nouba Cirque Du Soleil</option>
                                    <option value="Orlando Shakespeare Theater">Orlando Shakespeare Theater</option>
                                    <option value="Mad Cow Theater">Mad Cow Theater</option>
                                    <option value="Blue Man Group">Blue Man Group</option>
                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
								
                            </div>
                                <select class="form-control" id="rate1" name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
                            <button class="btn btn-default" type="submit">Add</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<p></p>
	</body>
</html