<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itenarary</title>
   
    <link rel="stylesheet" href="itenerary.css"/>
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
        <a class="active" href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a  href="view-invoice-prompt.php">View Invoices</a>
        <a  href="payments-prompt.php">Payments</a>
        <a class="log-out-button" href="agent-login.php">Log out</a>
      </div>
    </nav>
    
    <div class="main-body">
     
      
<div class="top">
<div class="invoice" id="invoice-form">
            <h3>ITINERARIES</h3><br>
  <form action="../Processes/itinerary-process.php" method="post">

    <label for="itenary id">Client Code</label>
    <input type="text" id="input-text" name="client_code"  style="width: 100%;" required><br><br>
    <label for="itenary id">E_Ticket</label>
    <input type="file" id="input_text" name="e_ticket" style="width: 100%;" required ><br><br>
    <label for="itenary id">Accomodation Voucher</label>
    <input type="file" id="input_text" name="accomodation_voucher" style="width: 100%;" required><br><br>
    <label for="itenary id">Transport Voucher</label>
    <input type="file" id="input_text" name="transport_voucher"style="width: 100%;" required><br><br>
    <label for="itenary id">Agent Code</label>
    <input type="text" id="input-text" name="agent_code" style="width: 100%;" required><br><br>
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
