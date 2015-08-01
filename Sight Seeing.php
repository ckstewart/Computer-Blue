<!DOCTYPE html>

<html lang="en">
    
    <?php 
    
    require_once "connectdb.php";
 require_once "connectdb.php";

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
            #myCarousel3 {     background:url(http://divinelifestyle.com/wp-content/uploads/2014/07/Discovery-Cove-Grand-Reef.jpg);
                
                
            }
		</style>
	</head>
	<body>
		<?php include("Navbar.php");?>
		<!-- Carousel -->
		<div id = "myCarousel3" class = "carousel slide container">
			<ol class = "carousel-indicators">
				<li data-target = "#myCarousel3" data-slide-to = "0" class = "active"></li>
				<li data-target = "#myCarousel3" data-slide-to = "1"></li>
				<li data-target = "#myCarousel3" data-slide-to = "2"></li>
				<li data-target = "#myCarousel3" data-slide-to = "3"></li>
				<li data-target = "#myCarousel3" data-slide-to = "4"></li>
			</ol>
			<div class = "carousel-inner">
				<div class = "item active">
					<img src = "img/cove.jpg" alt = "Discovery Cove" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Discovery Cove</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/eola.jpg" alt = "Lake Eola Park" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Lake Eola Park</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/kellypark.jpg" alt = "Kelly Park" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Kelly Park</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/balloon.jpg" alt = "Orlando Balloon Rides" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando Balloon Rides</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/gator.jpg" alt = "Gatorland" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Gatorland</h3>
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
				<li class="active"><a href="#cove" data-toggle="tab">Discovery Cove</a></li>
				<li><a href="#eola" data-toggle="tab">Lake Eola Park</a></li>
				<li><a href="#kelly" data-toggle="tab">Kelly Park</a></li>
				<li><a href="#balloon" data-toggle="tab">Orlando Balloon Rides</a></li>
				<li><a href="#gator" data-toggle="tab">Gatorland</a></li>
			</ul>
		</div>
		<div class="container nav-tabs">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="cove">
					<p>Discovery Cove is a theme park owned and operated by SeaWorld Parks & Entertainment and located just outside of Orlando, Florida in Orange County. It is a sister park of SeaWorld Orlando and Aquatica Orlando. At this park, guests can interact with a variety of marine animals, most notably bottlenose dolphins. In addition to swimming with dolphins, Discovery Cove guests can interact with exotic birds, tropical fish, rays, and land mammals.                </p>
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

                            
                                while($magic = $_SESSION['Discovery Cove']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Sight%20Seeing.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Discovery Cove">Discovery Cove</option>
                                    <option value="Lake Eola Park">Lake Eola Park</option>
                                    <option value="Kelly Park">Kelly Park</option>
                                    <option value="Orlando Balloon Rides">Orlando Balloon Rides</option>
                                    <option value="Gatorland">Gatorland</option>
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
				<div class="tab-pane fade" id="eola">
					<p>Lake Eola Park is located in the heart of Downtown Orlando. The sidewalk that circles the lake is .9 miles in length, making it easy for visitors to keep track of their walking or running distances. Other activities available to park visitors include renting swan-shaped paddle boats, feeding the live swans and other birds inhabiting the park, seeing a concert or a play in the Walt Disney Amphitheater, grabbing a bite to eat at Relax Grill on Lake Eola or relaxing amid beautiful flower beds and a spectacular view of Orlando’s skyline.</p>
					<div class="actionBox">
						<ul class="commentList">
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
								</div>
								<div class="commentText">
									<p class="">The UCF Knights football team is my favorite college sports team to follow!</p>
									<span class="date sub-text">on March 5th, 2015</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/7"/>
								</div>
								<div class="commentText">
									<p class="">Blake Bortles will carry the Jaguars in the upcoming years.</p>
									<span class="date sub-text">on April 13th, 2015</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/9" />
								</div>
								<div class="commentText">
									<p class="">Bernard Perriman our former Wide Receiver looks like the Predator from Alien vs Predator.</p>
									<span class="date sub-text">on May 12th, 2014</span>
								</div>
							</li>
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Lake Eola Park']->fetch_assoc())
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
						<form class="form-inline" role="form">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Your comments" />
							</div>
							<div class="form-group">
								<button class="btn btn-default">Add</button>
							</div>
                            <select class="form-control" id="rate1" name="rate1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
						</form>
					</div>
				</div>
				<div class="tab-pane fade" id="kelly">
					<p>Dr. Howard A. Kelly Park, often called Kelly Park, is a protected area which is owned by Orange County, Florida. It lies about 17 miles (27 kilometers) northwest of Orlando. It shares some of its boundaries with Wekiwa Springs State Park and Rock Springs Run State Reserve. The Rock Springs Run, a 10-mile (16 km)-long tributary of the Wekiva River, has its source near the northern boundary of Kelly Park.</p>
					<div class="actionBox">
						<ul class="commentList">
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
								</div>
								<div class="commentText">
									<p class="">I was hoping Michael Jordan's kid panned out but he was a bum.</p>
									<span class="date sub-text">on March 5th, 2015</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/7"/>
								</div>
								<div class="commentText">
									<p class="">Why does this team continue to dissapoint me so much.</p>
									<span class="date sub-text">on April 13th, 2015</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/9" />
								</div>
								<div class="commentText">
									<p class="">Hey at least Michael Jordan used to show up court side sometimes.  That was the only plus.</p>
									<span class="date sub-text">on May 12th, 2014</span>
								</div>
							</li>
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Kelly Park']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Sight%20Seeing.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Discovery Cove">Discovery Cove</option>
                                    <option value="Lake Eola Park">Lake Eola Park</option>
                                    <option value="Kelly Park">Kelly Park</option>
                                    <option value="Orlando Balloon Rides">Orlando Balloon Rides</option>
                                    <option value="Gatorland">Gatorland</option>
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
				<div class="tab-pane fade" id="balloon">
					<p>Orlando Balloon Rides is the Premier Balloon Company in Central Florida and is the largest passenger ride operator on the Eastern seaboard of the United States. The well established companies of Blue Water Balloons and Orange Blossom Balloons have merged to form Orlando Balloon Rides.</p>
					<div class="actionBox">
						<ul class="commentList">
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
								</div>
								<div class="commentText">
									<p class="">As one of the few American soccer fans I'm glad I finally have a team in my home town.</p>
									<span class="date sub-text">on March 5th, 2015</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/7"/>
								</div>
								<div class="commentText">
									<p class="">Perfect place for a soccer team in a college and tourist town.</p>
									<span class="date sub-text">on April 13th, 2015</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/9" />
								</div>
								<div class="commentText">
									<p class="">The future is looking bright for us even though we are an expansion team.  Let's go OCSC!</p>
									<span class="date sub-text">on May 12th, 2014</span>
								</div>
							</li>
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Orlando Balloon Rides']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Sight%20Seeing.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Discovery Cove">Discovery Cove</option>
                                    <option value="Lake Eola Park">Lake Eola Park</option>
                                    <option value="Kelly Park">Kelly Park</option>
                                    <option value="Orlando Balloon Rides">Orlando Balloon Rides</option>
                                    <option value="Gatorland">Gatorland</option>
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
				<div class="tab-pane fade" id="gator">
					<p>Gatorland is a 110-acre (45 ha) theme park and wildlife preserve located along South Orange Blossom Trail in Orlando, Florida. It was founded by Owen Godwin in 1949, and still privately owned by his family today. Billed as the "Alligator Capital of the World," Gatorland features thousands of alligators and crocodiles, a breeding marsh with boardwalk and observation tower, reptile shows, aviary, petting zoo, swamp walk and educational programs. The park is known for buying and rescuing nuisance alligators from trappers that would otherwise be killed for their meat and skin. The Breeding Marsh area of the park was used in the filming of the 1984 movie Indiana Jones and the Temple of Doom.</p>
					<div class="actionBox">
						<ul class="commentList">
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
								</div>
								<div class="commentText">
									<p class="">This AFL team will be the closest thing to an NFL team, so lets enjoy it.</p>
									<span class="date sub-text">
									on March 5th, 2015
									</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/7"/>
								</div>
								<div class="commentText">
									<p class="">AFL high scoring teams like the Predators are more fun to watch than relatively slow paced NFL teams anyway.</p>
									<span class="date sub-text">on April 13th, 2015</span>
								</div>
							</li>
							<li>
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/9" />
								</div>
								<div class="commentText">
									<p class="">I wish we would sign Ricky Williams for a couple games or so.</p>
									<span class="date sub-text">
									on March 5th, 2015
									</span>
								</div>
							</li>
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Gatorland']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Sight%20Seeing.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Discovery Cove">Discovery Cove</option>
                                    <option value="Lake Eola Park">Lake Eola Park</option>
                                    <option value="Kelly Park">Kelly Park</option>
                                    <option value="Orlando Balloon Rides">Orlando Balloon Rides</option>
                                    <option value="Gatorland">Gatorland</option>
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