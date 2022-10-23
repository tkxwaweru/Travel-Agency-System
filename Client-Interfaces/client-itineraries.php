<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.home</title>
  <link rel="stylesheet" href="client-itineraries.css">
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
        <h4><h4><?php  include("../Processes/login-process.php"); ?><?php  echo $_SESSION['client_email']; ?></h4></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="client-dashboard-home.php">Home</a>
        <a href="share-experiences.php">Share experiences</a>
        <a href="booking-request.php">Booking requests</a>
        <a href="booking-history.php">Booking history</a>
        <a href="client-invoices.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a class="active" href="client-itineraries.php">Itineraries</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Itineraries</h2>

      <div class="table-container">
        <h1>Your itineraries:</h1>

        <table>
          <tr>
            <th>Client code</th>
            <th>E-ticket</th>
            <th>Accomodation voucher</th>
            <th>Transport voucher</th>
            <th>Agent code</th>
          </tr>
          <tr>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
          </tr>
        </table>

      </div>

    </div>
    </div>
  </div>
</body>
</html>
