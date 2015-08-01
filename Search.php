<!DOCTYPE html>
<html lang="en">
    
    <?php 
    
    require_once "connectdb.php";
    require_once "connectdb.php";

        if(isset($_POST['search']))
        {
            $sql = "select * from keywords where keywords like '%".$_POST['search']."%' OR locale like '%".$_POST['search']."%'";
            $result = mysqli_query($db,$sql);
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
        position: absolute;
        right: 71%;
        margin-top: 100px;
        font-weight: bold;
        font-family: inherit;
        color: firebrick;
    }
    body {
        padding-top: 65px;
    }
</style>
</head>
	<body>
		<?php include("Navbar.php");?>
        <div class="container well">
            <form class="form-inline" role="form" method="post" action="Search.php">
                <div class="form-group">
                    <input class="form-control" name="search" type="textbox" placeholder="Search...">
                    <button class="btn btn-default" type="submit">Search</button>
                </div>
            </form>
        </div>
        <?php
            if (isset($result) && $result->num_rows > 0)
            {
                while ($row = $result->fetch_assoc())
                {
                    $sql = "select avg(stars), count(stars) from comments where place='".$row['locale']."'";
                    $rslt = mysqli_query($db, $sql);
                    $avg_rslt = $rslt->fetch_assoc();
                    $avg_rat = $avg_rslt['avg(stars)'];
                    $rat_cnt = $avg_rslt['count(stars)'];
                    echo "<div class='container well'>";
                        echo "<a href='".$row['site']."'>";
                            echo "<div class='row'>";
                                echo "<div class='col-sm-4'>";
                                    echo "<img src='".$row['img_url']."' width=100%/>";
                                echo "</div>";
                                echo "<div class='container col-sm-8'>";
                                    echo "<div class='row'>";
                                        echo "<h1>".$row['locale']."</h1>";
                                    echo "</div>";
                                    echo "<div class='row'>";
                                        echo "<h3>Rating: ".number_format($avg_rat, 2)."</h3>";
                                        echo "<h5><small>(Ratings: ".$rat_cnt.")</small></h5>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</a>";
                    echo "</div>";
                }
            }
        ?>
    </body>
</html>
