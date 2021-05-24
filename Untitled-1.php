<?php
$host = "localhost";
$user = "root";
$password ="";
$dbname ="hospital";

$con = mysqli_connect($host, $user, $password, $dbname);
if(!$con){
    die("connection failed:" . mysqli_connect_error());
}
