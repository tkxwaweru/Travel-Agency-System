<?php
require("DBCONNECT.php");
session_start();

if(isset($_POST['login'])){
    $email = $_POST['admin_email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `admin_email` = '$email' AND `password` = '$password' ";
    $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_assoc($result)){
        $password = $row['password'];
        $_SESSION['admin_email'] = $email;

        echo "correct";
    }
    else{
        echo "incorrect Details";
    }
}



?>