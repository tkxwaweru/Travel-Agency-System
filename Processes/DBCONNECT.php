<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel_agency";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn){
        die("Connection failed!".mysqli_connect_error());
    }

    echo "CONNECTION SUCCESSFUL!<br><br>";
?>
