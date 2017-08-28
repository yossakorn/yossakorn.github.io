<?php
$servername = "localhost";
$username = "ad";
$password = "p@ssword";
$dbname = "Test";
$port = "3306";
$con = new mysqli($servername, $username, $password, $dbname, $port);
$con->set_charset("utf8");
if($con->connect_error){
    die("Connection failed: " .mysqli_connect_error());
}
    //echo("Succesfully");


?>