<?php

require_once("../Processes/DBCONNECT.php");

$sqli="SELECT * FROM booking_history WHERE client_id = $client_id";
$result = mysqli_query($conn , $sqli);
$test=mysqli_fetch_all($result, MYSQLI_ASSOC);
$data = mysqli_fetch_assoc($result);

if(isset($_GET["view"])){
 $client_id=$_GET["view"];
 $sqli="SELECT * FROM booking_history WHERE client_id=$client_id";

}
?>
