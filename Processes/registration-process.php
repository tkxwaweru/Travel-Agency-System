<?php
if (isset($_POST['register'])){

    require "DBCONNECT.php";

    $fname = $_POST['client_fname'];
    $lname = $_POST['client_lname'];
    $age = $_POST['age'];
    $gender = $_POST['sex'];
    $phonenumber = $_POST['phone_number'];
    $email = $_POST['client_email'];
    $password = $_POST['password'];


$sql= "INSERT INTO `clients`(`client_fname`, `client_lname`, `age`, `sex`, `phone_number`, `client_email`, `password`) VALUES ('$fname', '$lname', '$age', '$gender','$phonenumber', '$email', '$password')";

if(mysqli_query($connect, $sql)){
    echo "New Record Created Successfully";
}
else{
    echo"Record Creation Failed. ERROR!!".mysqli_error($connect);
}

}