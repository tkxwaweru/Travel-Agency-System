<?php 

$hiddenadmin_id = $_POST['hiddenadmin_id']; 

$admin_id = $_POST['admin_id']; 

$admin_name = $_POST['admin_name']; 

$admin_email = $_POST['admin_email']; 
 
 

require("../Processes/DBCONNECT.php"); 

$sql = "UPDATE admins SET `admin_id`='$admin_id',`admin_name`='$admin_name', `admin_email` = '$admin_email' WHERE `admin_id` = '$hiddenadmin_id'"; 

$result = mysqli_query($conn, $sql); 


if($result = mysqli_query($conn, $sql)){ 

    echo "<p> Admin info updated Successfully.</p>";
    header("Location: view_admin_test.php");

                } 

 

?> 