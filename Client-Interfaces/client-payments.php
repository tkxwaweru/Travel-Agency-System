<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.payments</title>
  <link rel="stylesheet" href="explore-attractions.css" />
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
        <h4><?php  include("../Processes/login-process.php"); ?><?php  echo $_SESSION['client_email']; ?></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="client-dashboard-home.php">Home</a>
        <a href="explore-attractions.php">Explore attractions</a>
        <a href="booking-request.php">Booking requests</a>
        <a href="booking-history.php">Booking history</a>
        <a href="client-invoices.php">Invoices</a>
        <a class="active" href="client-payments.php">Payment</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Payments</h2>

    </div>
    </div>
  </div>
</body>
</html>
