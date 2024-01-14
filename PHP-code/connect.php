<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "stadium";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if(!$conn){
    die("Connection failed");
}

?>