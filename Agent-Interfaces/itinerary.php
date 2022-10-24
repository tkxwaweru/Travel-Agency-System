<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itenarary</title>
   
    <link rel="stylesheet" href="make-booking.css"/>
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
        <a href="clients.php">Clients</a>
        <a  href="make-booking.php">Make Booking</a> 
        <a href="booking-requests.php">Booking Requests</a>
        <a href="booking-history.php">Booking history</a>
        <a class="active" href="itinerary.php">Itinerary</a>
        <a  href="agent-invoice.php">Invoice</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>
    
    <div class="main-body">
     
      
<div class="top">
<div class="invoice" id="invoice-form">
            <h3>ITINERARIES</h3><br>
  <form action="">

    <label for="itenary id">Itinerary Id</label>
    <input type="text" id="input_text" name="itenerary id" style="width: 100%;"> <br>

    <label for="itenary id">Client Code</label>
    <input type="text" id="input_text" name="client code"  style="width: 100%;"><br>
    <label for="itenary id">E_Ticket</label>
    <input type="text" id="input_text" name="e ticket" style="width: 100%;"><br>
    <label for="itenary id">Accomodation Voucher</label>
    <input type="text" id="input_text" name="accomodation voucher" style="width: 100%;"><br>
    <label for="itenary id">Transport Voucher</label>
    <input type="text" id="input_text" name="transport voucher"style="width: 100%;"><br>
    <label for="itenary id">Agent Code</label>
    <input type="text" id="input_text" name="agent code" style="width: 100%;"><br>
    <label for="itenary id">Prepared At</label>
    <input type="text" id="input_text" name="prepared at" style="width: 100%;"><br><br>
    <input type="submit" value="Submit" id="button">

  </form>
</div>
</div>
</div>

</body>
</html>