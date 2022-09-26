<?php
$servername = "localhost";
$username = "root";
$password = "S@nk@y2000";
$dbname = "travel_agency";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect){
    die("connection failed ".mysqli_connect_error());
}