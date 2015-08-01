<!DOCTYPE html>

<html lang="en">
    
    <?php 
    
    require_once "connectdb.php";

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
            {
                signup($_POST['name'],$_POST['email'],$_POST['password'],$db);
            echo "called function";
            }

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
            .form-horizontal {
            margin-top:100px;
            }
            .button {
            float: right;
            position: relative;
            left: -50%; /* or right 50% */
            text-align: left;
            }
            button {
            position: relative;
            left: 50%;
            }
    fieldset{width:50%;margin-left:auto;margin-right:auto;}
		</style>
</head>
	<body>
        
        <?php if (!$_SESSION['NAME']) { ?>
        
		<?php include("Navbar.php");?> 
    
    
    <form class="form-horizontal" method="post" action="signup.php">
  <fieldset>
      
    <legend id = "sign" align="center">Sign Up for Travel Advisor!</legend>
      
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" style="width:300px">
                </div>
        </div>
      
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Name</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputUser" placeholder="Name" name="name" style="width:300px">
              </div>
        </div>
      
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" style="width:300px">
           
        <!--<div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
        </div>-->     
          
            </div>
    </div>
    <div class="form-group">
        
        
        
      <!--<label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">-->
        
        
        <div class="button">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </fieldset>
</form>
    
    <?php } if($_SESSION['NAME']){header('Location: Home.php');}?>
    
    

</body>
</html>
