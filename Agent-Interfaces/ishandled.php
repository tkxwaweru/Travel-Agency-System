




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Invoice</title>
   
    <link rel="stylesheet" href="edit.css">

</head>
<body>
<header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
        <h4></h4><?php  include("../Processes/agent-login-process.php"); ?><?php  echo $_SESSION['agent_email']; ?><h4></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="agentHome.php">Home</a>
        <a href="clients-prompt.php">Your Clients</a>
        <a  href="make-booking.php">Make Booking</a> 
        <a class="active" href="booking-requests-prompt.php">Booking Requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a  href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a  href="view-invoices-prompt.php">View Invoices</a>
        <a  href="payments-prompt.php">Payments</a>
        <a class="log-out-button" href="agent-login.php">Log out</a>
      </div>
    </nav>
    
    <div class="main-body">
     
      
<div class="top">
<div class="invoice" id="invoice-form">
<?php 

$bookingreqID = $_POST['booking_request_id'];
 
 

require("../Processes/DBCONNECT.php");

$sql = "SELECT * FROM booking_requests where booking_request_id='$bookingreqID'"; 

$result = mysqli_query($conn, $sql); 

 
 

        if (mysqli_num_rows($result) === 1) { 

            $data = mysqli_fetch_assoc($result); 

            echo 
            
        " 

        <form action='ishandled-process.php' method='POST'> 

        <input type='hidden' name='is_handled' value=".$bookingreqID." /> 

        <p>BOOKING REQUEST ID:</p> 

        <input type='text' name='booking_request_id' value=".$data['booking_request_id']." readonly/> 

        <p>Client Code:</p> 

        <input type='text' name='client_code' value=".$data['client_code']." readonly/> 

        <p>AGENT CODE:</p> 

        <input type='text' name='agent_code' value=".$data['agent_code']." readonly/> 

        <p>Is Handled:</p> 

        <input type='text' name='is_handled' value=".$data['is_handled']." /> 


        <button type='submit' style='background-color:#d5e5ff; padding: 10px; width:100px; border-radius:10px;' >Save</button> 

        </form> 

        "; 

 

} 

?>  
</div>
</div>
</div>

</body>
</html>


