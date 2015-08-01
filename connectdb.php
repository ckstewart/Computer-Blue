<?php
require_once 'functions.php';

$servername = 'localhost';
$username = 'lricha35';
$password = 'mysqlpass';
$dbname = 'lricha35';

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
} 
echo 'Connected successfully';
?>