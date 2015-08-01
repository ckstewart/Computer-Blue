<?php 
require_once 'connectdb.php';
logout(); 
echo "logged out Succesful";
//echo date("F d, Y ");
header('Location: home.php');
?>