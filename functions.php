<?php

session_start();
if(!$_SESSION['NAME']){$_SESSION['NAME']=NULL;};

function signin($email,$password,$db)
{

    $sql = "Select * from users where email ='$email' and password ='$password'";
    $result = mysqli_query($db,$sql) or die (" could not log in");
    $user = $result->fetch_assoc();
    //echo $user['name']." ".$user['email'];
    $_SESSION['NAME']=$user['name'];
    $_SESSION['PHOTO']=$user['photo'];
    $_SESSION['EMAIL']=$user['email'];
    $email = $_SESSION['EMAIL'];
    
    
    
    //echo "this should be good";

}

function getComments($db)
{
    //sports
    $sql = "SELECT * from comments where place = 'Orlando Magic'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando Magic'] = $result;
    
    $sql = "SELECT * from comments where place = 'UCF Football'";
    $result = mysqli_query($db,$sql);
    $_SESSION['UCF Football'] = $result;
    
    $sql = "SELECT * from comments where place = 'UCF Basketball'";
    $result = mysqli_query($db,$sql);
    $_SESSION['UCF Basketball'] = $result;
    
    $sql = "SELECT * from comments where place = 'Orlando City SC'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando City SC'] = $result;
    
    $sql = "SELECT * from comments where place = 'Orlando Predators'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando Predators'] = $result;
    
    //Art and History
    $sql = "SELECT * from comments where place = 'Waterhouse Residence'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Waterhouse Residence'] = $result;
    
    $sql = "SELECT * from comments where place = 'Museum of Seminole County'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Museum of Seminole County'] = $result;
    
    $sql = "SELECT * from comments where place = 'Ripleys Believe it or Not'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Ripleys Believe it or Not'] = $result;
    
    $sql = "SELECT * from comments where place = 'Museum of Military History'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Museum of Military History'] = $result;
    
    $sql = "SELECT * from comments where place = 'Fort Christmas Historical Park'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Fort Christmas Historical Park'] = $result;
    
    //Theme Park
    $sql = "SELECT * from comments where place = 'Universal Studios'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Universal Studios'] = $result;
    
    $sql = "SELECT * from comments where place = 'Disney World'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Disney World'] = $result;
    
    $sql = "SELECT * from comments where place = 'Islands of Adventure'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Islands of Adventure'] = $result;
    
    $sql = "SELECT * from comments where place = 'SeaWorld'";
    $result = mysqli_query($db,$sql);
    $_SESSION['SeaWorld'] = $result;
    
    $sql = "SELECT * from comments where place = 'Epcot'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Epcot'] = $result;
    
    //theater
    $sql = "SELECT * from comments where place = 'La Nouba Cirque Du Soleil'";
    $result = mysqli_query($db,$sql);
    $_SESSION['La Nouba Cirque Du Soleil'] = $result;
    
    $sql = "SELECT * from comments where place = 'Orlando Shakespeare Theater'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando Shakespeare Theater'] = $result;
    
    $sql = "SELECT * from comments where place = 'Mad Cow Theater'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Mad Cow Theater'] = $result;
    
    $sql = "SELECT * from comments where place = 'Blue Man Group'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Blue Man Group'] = $result;
    
    
    
    //Sight Seeing
    $sql = "SELECT * from comments where place = 'Discovery Cove'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Discovery Cove'] = $result;
    
    $sql = "SELECT * from comments where place = 'Lake Eola Park'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Lake Eola Park'] = $result;
    
    $sql = "SELECT * from comments where place = 'Kelly Park'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Kelly Park'] = $result;
    
    $sql = "SELECT * from comments where place = 'Orlando Balloon Rides'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando Balloon Rides'] = $result;
    
    $sql = "SELECT * from comments where place = 'Gatorland'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Gatorland'] = $result;
    
    //shopping
    $sql = "SELECT * from comments where place = 'Orlando International Premium Outlets'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando International Premium Outlets'] = $result;
    
    $sql = "SELECT * from comments where place = 'Mall at Millenia'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Mall at Millenia'] = $result;
    
    $sql = "SELECT * from comments where place = 'Florida Mall'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Florida Mall'] = $result;
    
    $sql = "SELECT * from comments where place = 'Pointe Orlando'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Pointe Orlando'] = $result;
    
    $sql = "SELECT * from comments where place = 'Downtown Disney'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Downtown Disney'] = $result;
    
    
    //restaurants
    $sql = "SELECT * from comments where place = 'Luma on Park'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Luma on Park'] = $result;
    
    $sql = "SELECT * from comments where place = 'Ravenous Pig'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Ravenous Pig'] = $result;
    
    $sql = "SELECT * from comments where place = 'Hillstone'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Hillstone'] = $result;
    
    $sql = "SELECT * from comments where place = 'California Grill'";
    $result = mysqli_query($db,$sql);
    $_SESSION['California Grill'] = $result;
    
    $sql = "SELECT * from comments where place = 'Cask and Larder'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Cask and Larder'] = $result;
    
    //Recreation
    $sql = "SELECT * from comments where place = 'The Spa'";
    $result = mysqli_query($db,$sql);
    $_SESSION['The Spa'] = $result;
    
    $sql = "SELECT * from comments where place = 'Fort Gatlin Recreation Complex'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Fort Gatlin Recreation Complex'] = $result;
    
    $sql = "SELECT * from comments where place = 'UCF Recreation and Wellness'";
    $result = mysqli_query($db,$sql);
    $_SESSION['UCF Recreation and Wellness'] = $result;
    
    $sql = "SELECT * from comments where place = 'Ritz-Carlton Spa'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Ritz-Carlton Spa'] = $result;
    
    
    //Outdoor Activites
    $sql = "SELECT * from comments where place = 'Orlando Trophy Bass'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando Trophy Bass'] = $result;
    
    $sql = "SELECT * from comments where place = 'Orlando Watersports Complex'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Orlando Watersports Complex'] = $result;
    
    $sql = "SELECT * from comments where place = 'Paddleboard Orlando'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Paddleboard Orlando'] = $result;
    
    $sql = "SELECT * from comments where place = 'Divers Direct'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Divers Direct'] = $result;
    
    $sql = "SELECT * from comments where place = 'Grand Cypress'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Grand Cypress'] = $result;
    
    //Night Life
    $sql = "SELECT * from comments where place = 'Ice Bar'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Icebar'] = $result;
    
    $sql = "SELECT * from comments where place = 'LUX Ultra Lounge'";
    $result = mysqli_query($db,$sql);
    $_SESSION['LUX Ultra Lounge'] = $result;
    
    $sql = "SELECT * from comments where place = 'The Beacham'";
    $result = mysqli_query($db,$sql);
    $_SESSION['The Beacham'] = $result;
    
    $sql = "SELECT * from comments where place = 'Red Coconut Club'";
    $result = mysqli_query($db,$sql);
    $_SESSION['Red Coconut Club'] = $result;
    
    $sql = "SELECT * from comments where place = 'House of Blues'";
    $result = mysqli_query($db,$sql);
    $_SESSION['House of Blues'] = $result;
    

}

function addComment($comment,$place,$rate,$db)
{
    date_default_timezone_set('UTC');
    
    $date =date("F j, Y ");
    $name = ucfirst($_SESSION['NAME']);
    $email = ucfirst($_SESSION['EMAIL']);
    $sql = "INSERT INTO comments (user,comment,stars,place,cdate,pemail) values ('$name','$comment','$rate','$place','$date','$email')";
    $result = mysqli_query($db,$sql) or die ("Could not save comment");
    
    
}

function signup($name,$email,$password,$db)
{
    $sql = "Insert INTO users (name,email,password,photo) values ('$name','$email','$password','default.jpg') ";
    $result = mysqli_query($db,$sql) or die ("Can't save email");
//echo "functions ran";
    
    signin($email,$password,$db);

}

function logout()
{
    session_destroy();
}

function savephoto($db,$photo)
{
    $email = $_SESSION['EMAIL'];
    $sql = "UPDATE users SET photo = '$photo' WHERE email = '$email'";
    mysqli_query($db,$sql);
    
}

function changephoto($db,$email)
    {
        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($db,$sql);
        $photo = $result->fetch_assoc();
        $_SESSION['PHOTO']= $photo['photo'];
    
    }

?>