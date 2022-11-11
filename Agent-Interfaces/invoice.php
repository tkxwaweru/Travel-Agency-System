<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Invoice</title>
   
    <link rel="stylesheet" href="invoice.css">

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
        <a href="booking-requests-prompt.php">Booking Requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a  href="itinerary.php">Itinerary</a>
        <a class="active" href="invoice.php">Invoice</a>
        <a  href="view-invoices-prompt.php">View Invoices</a>
        <a  href="payments-prompt.php">Payments</a>
        <a class="log-out-button" href="agent-login.php">Log out</a>
      </div>
    </nav>
    
    <div class="main-body">
     
      
<div class="top">
<div class="invoice" id="invoice-form">
            <h3>INVOICES</h3><br>
  <form action="../Processes/invoice-process.php" method="post">

  <label for="client-code">Client Code</label>
    <input type="text" id="input-text" name="client-code"style="width: 100%;" required><br>
    <label for="agent-code">Agent Code</label>
    <input type="text" id="input-text" name="agent-code"style="width: 100%;" required><br>
    <label for="flight-total">Flight Total</label>
    <input type="number" id="input-text" name="flight-total" style="width: 100%;" required><br>
    <label for="accomodation-total">Accomodation Total</label>
    <input type="number" id="input-text" name="accomodation-total" style="width: 100%;" required><br>
    <label for="transport-total">Transportation Total</label>
    <input type="number" id="input-text" name="transport-total" style="width: 100%;" required><br>

    <input type="submit" value="Submit" id="button" style=
    "width: 100px;
    padding: 10px;
    margin-top: 10px;
    background-color: #aec6cf;
    text-align: center;">

  </form>
</div>
</div>
</div>

</body>
</html>
