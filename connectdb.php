<?php

require_once 'functions.php';

$dbhost = "localhost";
$dbname = 'computerblue';
$dbuser = "root";
$dbpass = "flyers62";

$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die("unable to connect");

//echo "connect sucessful";




?>