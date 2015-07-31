<?php

session_start();
if(!$_SESSION['NAME']){$_SESSION['NAME']=NULL;};

function signin($email,$password,$db)
{

    $sql = "Select * from users where email ='$email' and password ='$password'";
    $result = mysqli_query($db,$sql) or die (" could not log in");
    $user = $result->fetch_assoc();
    echo $user['name']." ".$user['email'];
    $_SESSION['NAME']=$user['name'];
    
    
    
    //echo "this should be good";

}

function getComments($db)
{
    $sql = "SELECT * from comments where place = 'Orlando Magic'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando Magic'] = $result->fetch_assoc();
    return $result;

}

function addComment($comment,$place,$rate,$db)
{
    date_default_timezone_set('UTC');
    
    $date =date("F j, Y ");
    $name = ucfirst($_SESSION['NAME']);
    $sql = "INSERT INTO comments (user,comment,stars,place,cdate) values ('$name','$comment','$rate','$place','$date')";
    $result = mysqli_query($db,$sql) or die ("Could not save comment");
    
    
}

function signup($name,$email,$password,$db)
{
    $sql = "Insert INTO users (name,email,password) values ('$name','$email','$password') ";
    $result = mysqli_query($db,$sql) or die ("Can't save email");
//echo "functions ran";
    
    signin($email,$password,$db);

}

function logout()
{
    session_destroy();
}

?>