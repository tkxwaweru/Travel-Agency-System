<?php 
require("DBCONNECT.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone_number = $_POST['phone_number'];
$email = $_POST['client_email'];
$id_number = $_POST['id_number'];
$flight_type = $_POST['flight_type'];
$destination = $_POST['destination'];
$flight_class = $_POST['flight_class'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$infants = $_POST['infants'];
$depart_date = $_POST['depart_date'];
$return_date = $_POST['return_date'];
$accommodation_type = $_POST['accommodation_type'];
$room_type = $_POST['room_type'];
$food_type = $_POST['food_type'];
$transportation_type = $_POST['transportation_type'];
$bed_type = $_POST['bed_type'];
$hotel_type = $_POST['hotel_type'];
$description = $_POST['description'];

$sql= "INSERT INTO `booking request`(`fname`, `lname`, `phone_number`, `email`, `id_number`, `fligt_type`, `destination`, `flight_class`, `adults`, `children`, `infants`, `depart_date`, `return_date`, `accommodation_type`, `room_type`, `food_type`, `transportation_type`, `bed_type`, `hotel_type`, `decription`) VALUES ('$fname', '$lname', '$phone_number', '$email', '$id_number', '$flight_type', '$destination', '$flight_class', '$adults', '$children', '$infants', '$depart_date', '$return_date', '$accommodation_type', '$room_type', '$food_type', '$transportation_type', '$bed_type', '$hotel_type', '$description')";

if (mysqli_query($conn,$sql)) {
 echo "Your booking request info has been captured successfully";
}else{echo "Error: Record not added".mysqli_error($conn);}

?>