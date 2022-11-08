<?php 

$ishandled = $_POST['is_handled'];
$bookingreqID = $_POST['booking_request_id']; 





require("../Processes/DBCONNECT.php"); 

$sql = "UPDATE booking_requests SET `is_handled`='$ishandled' WHERE `booking_request_id` = '$bookingreqID'"; 

$result = mysqli_query($conn, $sql); 


if($result = mysqli_query($conn, $sql)){ 
 
    header("Location: booking-requests-prompt.php");
             

                } 
else{
    echo "error";
}
 

?> 

 
 

 