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
            #myCarousel3 {     background:url(http://www.glenbrookresortvilla.com/images/graphics/millenia.jpg);
                
                
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
						<li class = "aus"><a href = "">Currently Viewing: Shopping Locations</a></li>
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
				<li data-target = "#myCarousel3" data-slide-to = "4"></li>
			</ol>
			<div class = "carousel-inner">
				<div class = "item active">
					<img src = "img/outlets.jpg" alt = "Orlando International Premium Outlets" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando International Premium Outlets</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/millenia.jpg" alt = "Mall at Millenia" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Mall at Millenia</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/mall.jpg" alt = "Florida Mall" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Florida Mall</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/pointe.jpg" alt = "Pointe Orlando" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Pointe Orlando</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/downtown.jpg" alt = "Downtown Disney" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Downtown Disney</h3>
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
				<li class="active"><a href="#outlets" data-toggle="tab">Orlando International Premium Outlets</a></li>
				<li><a href="#millenia" data-toggle="tab">Mall at Millenia</a></li>
				<li><a href="#mall" data-toggle="tab">Florida Mall</a></li>
				<li><a href="#pointe" data-toggle="tab">Pointe Orlando</a></li>
				<li><a href="#downtown" data-toggle="tab">Downtown Disney</a></li>
			</ul>
		</div>
		<div class="container nav-tabs">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="outlets">
					<p>180 OUTLET STORES: Find impressive savings at BCBG Max Azria, Coach, Cole Haan, J.Crew, Kenneth Cole, Lacoste, Michael Kors, Neiman Marcus Last Call, Polo Ralph Lauren, Saks Fifth Avenue Off 5th, Thomas Pink, Tourneau, White House Black Market.</p>
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
						</ul>
						<form class="form-inline" role="form" method="post" action="Shopping.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando International Premium Outlets">Orlando International Premium Outlets</option>
                                    <option value="Mall at Millenia">Mall at Millenia</option>
                                    <option value="Florida Mall">Florida Mall</option>
                                    <option value="Pointe Orlando">Pointe Orlando</option>
                                    <option value="Downtown Disney">Downtown Disney</option>
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
				<div class="tab-pane fade" id="millenia">
					<p>The Mall at Millenia offers an extraordinary experience for those of us who call Orlando home or those visiting Orlando for business or pleasure.</p>
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
						</ul>
						<form class="form-inline" role="form" method="post" action="Shopping.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando International Premium Outlets">Orlando International Premium Outlets</option>
                                    <option value="Mall at Millenia">Mall at Millenia</option>
                                    <option value="Florida Mall">Florida Mall</option>
                                    <option value="Pointe Orlando">Pointe Orlando</option>
                                    <option value="Downtown Disney">Downtown Disney</option>
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
				<div class="tab-pane fade" id="mall">
					<p>The Florida Mall, located only minutes from the Orlando International Airport, is Central Florida’s largest and most remarkable shopping center. Welcoming more than 20 million visitors per year and spanning nearly 1.8 million square feet, The Florida Mall offers an experiential environment with more than 250 unique entertainment, retail and dining options.</p>
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
						</ul>
						<form class="form-inline" role="form" method="post" action="Shopping.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando International Premium Outlets">Orlando International Premium Outlets</option>
                                    <option value="Mall at Millenia">Mall at Millenia</option>
                                    <option value="Florida Mall">Florida Mall</option>
                                    <option value="Pointe Orlando">Pointe Orlando</option>
                                    <option value="Downtown Disney">Downtown Disney</option>
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
				<div class="tab-pane fade" id="pointe">
					<p>A place where you can elevate your dining experience at restaurants offering everything from casual fare to haute cuisine. Where you can discover a diverse collection of specialty shops. And where, when the sun sets, you can find a place pulsing with energy, music & live entertainment.</p>
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
						</ul>
						<form class="form-inline" role="form" method="post" action="Shopping.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando International Premium Outlets">Orlando International Premium Outlets</option>
                                    <option value="Mall at Millenia">Mall at Millenia</option>
                                    <option value="Florida Mall">Florida Mall</option>
                                    <option value="Pointe Orlando">Pointe Orlando</option>
                                    <option value="Downtown Disney">Downtown Disney</option>
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
				<div class="tab-pane fade" id="downtown">
					<p>World-class restaurants, dazzling entertainment and unique shops line the waterfront at the Downtown Disney area, a fun-filled district that includes The Landing, West Side and Marketplace! Here, you can shop in the world’s largest Disney store, dine amid prehistoric creatures, bowl a game at the 30-lane alley and so much more—over 80 venues and counting, featuring complimentary parking and admission.</p>
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
			</div>
		</div>
		<p></p>
	</body>
</html