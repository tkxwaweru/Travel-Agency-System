<?php 
require("DBCONNECT.php");

$fname = $_POST['agent_fname'];
$lname = $_POST['agent_lname'];
$phonenumber = $_POST['agent_phonenumber'];
$email = $_POST['agent_email'];
$password = $_POST['agent_password'];


$sql= "INSERT INTO `agents`(`agent_fname`, `agent_lname`, `agent_phonenumber`, `agent_email`, `agent_password`) VALUES ('$fname', '$lname','$phonenumber', '$email', '$password')";


if (mysqli_query($conn,$sql)) {
 echo "Agent added Successful.";
}else{echo "Error: Record not added".mysqli_error($conn);}

?>
