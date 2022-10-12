<?php 

$hiddenclient_id = $_POST['hiddenclient_id']; 

$client_id = $_POST['client_id']; 

$client_fname = $_POST['client_fname']; 

$client_lname = $_POST['client_lname']; 

$age = $_POST['age']; 

$sex = $_POST['sex']; 

$phone_number = $_POST['phone_number']; 

$client_email = $_POST['client_email']; 

$password = $_POST['password']; 
 
 

require("../Processes/DBCONNECT.php"); 

$sql = "UPDATE clients SET `client_id`='$client_id',`client_fname`='$client_fname',`client_lname`='$client_lname', `age` = '$age', `sex` = '$sex',`phone_number`='$phone_number',`client_email`='$client_email',`password`='$password' WHERE client_id = '$hiddenclient_id'"; 

$result = mysqli_query($conn, $sql); 


if($result = mysqli_query($conn, $sql)){ 

    echo "<p> Client info updated Successfully.</p>"; 

             

                } 

 

?> 

 
 

 