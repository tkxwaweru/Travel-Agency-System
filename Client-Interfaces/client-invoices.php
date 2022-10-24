<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.invoices</title>
  <link rel="stylesheet" href="client-invoices.css">
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
        <a href="share-experiences.php">Share experiences</a>
        <a href="booking-request.php">Booking requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a class="active" href="#">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a href="itineraries-prompt.php">Itineraries</a>
        <a href="code-information-prompt.php">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Invoices</h2>

      <div class="table-container">
        <h1>Your invoices:</h1>

        <table>
          <tr>
            <th>Client code</th>
            <th>Flight total</th>
            <th>Accomodation total</th>
            <th>Transportation total</th>
            <th>Service total</th>
            <th>Service charge</th>
            <th>Subtotal</th>
          </tr>

          <?php
          require('../Processes/DBCONNECT.php');
          $inputclientcode = $_POST['client_code'];

          $sql = "SELECT invoices.client_code, invoices.flight_total, invoices.accomodation_total, invoices.transportation_total, invoices.service_total, invoices.service_charge, invoices.subtotal FROM invoices WHERE invoices.client_code = '$inputclientcode'";
          $result = mysqli_query($conn, $sql);
          $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach($test as $key => $value){
          ?>

          <tr>
            <td><?php echo $value['client_code']; ?></td>
            <td><?php echo $value['flight_total']; ?></td>
            <td><?php echo $value['accomodation_total']; ?></td>
            <td><?php echo $value['transportation_total']; ?></td>
            <td><?php echo $value['service_total']; ?></td>
            <td><?php echo $value['service_charge']; ?></td>
            <td><?php echo $value['subtotal']; ?></td>
          </tr>

          <?php
          }
          ?>

        </table>

      </div>

    </div>
    </div>
  </div>
</body>
</html>
