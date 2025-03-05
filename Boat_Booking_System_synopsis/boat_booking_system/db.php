<?php
$host = "myriadb.cpy6yaemc7fx.ap-south-1.rds.amazonaws.com";
$user = "admin";
$password = "12345678";
$database = "boat_booking";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
