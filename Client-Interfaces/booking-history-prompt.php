<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.booking.history.prompt</title>
  <link rel="stylesheet" href="booking-history-prompt.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
        <h4><?php  include("../Processes/login-process.php"); ?><?php  echo $_SESSION['client_email']; ?></h4>
      </div>
    </div>
  </header>

  <div class="container">
  <nav>
      <div class="side_navbar">
        <a href="client-dashboard-home.php">Home</a>
        <a href="share-experiences.php">Share experiences</a>
        <a href="booking-request.php">Booking requests</a>
        <a class="active" href="#">Booking history</a>
        <a href="invoice-prompt.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a href="itineraries-prompt.php">Itineraries</a>
        <a href="code-information-prompt.php">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Booking history prompt</h2>
      <div class="payment-container">
        <h1>Code Verification</h1>
        <br>
        <p><h3>Kindly enter your <b>client code</b> to view your booking history:</h3></p>
        <br>
          <form action="booking-history.php" method="post">
            <div class="owner">
              <h3>Client code:</h3>
              <div class="input-field">
                <input type="text" id="clientCode" name="client_code" required>
              </div>
            </div>

            <br>
            <button type="submit" name="verify_code">View booking history</button>
          </form>
    </div> 
    </div>
  </div>
</body>
</html>
