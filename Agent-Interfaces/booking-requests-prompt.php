
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Clients</title>
  <link rel="stylesheet" href="agentHome.css" />
  <link rel="stylesheet" href="clients-prompt.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
        <h4><h4><?php  include("../Processes/agent-login-process.php"); ?><?php  echo $_SESSION['agent_email']; ?></h4></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
    
      <div class="side_navbar">
        <a href="agentHome.php">Home</a>
        <a href="clients-prompt.php">Clients</a>
        <a href="make-booking.php">Make Booking</a>
        <a class="active" href="booking-requests-prompt.php">Booking Requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a  href="view-invoices-prompt.php">View Invoices</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <div class="form-box">
        <form action="">
            <h3>Enter Your Agent Code</h3><br>
            <input type="text" name="agebt_code" id="input-text"><br>
            <input type="submit" value="Submit" class="button"> <br><br>
        </form>
      </div>


    </div>
    </div>
  </div>
</body>
</html>
