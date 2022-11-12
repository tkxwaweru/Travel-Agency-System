<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.itineraries</title>
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
        <a href="card-registration.php">Card registration</a>
        <a href="booking-request.php">Booking requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="invoice-prompt.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a class="active" href="#">Itineraries</a>
        <a href="code-information-prompt.php">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Itineraries</h2>

      <div class="table-container">
        <h1>Your itineraries:</h1>
        <br>
        <h3>Right-click on each file to save or print it.</h3>
        <br>

        <table>
          <tr>
            <th>Client code</th>
            <th>E-ticket</th>
            <th>Accomodation voucher</th>
            <th>Transport voucher</th>
            <th>Agent code</th>
          </tr>

          <?php
          require('../Processes/DBCONNECT.php');
          $inputclientcode = $_POST['client_code'];

          $sql = "SELECT * FROM itineraries WHERE `itineraries`.`client_code` = '$inputclientcode'";
          $result = mysqli_query($conn, $sql);
          $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach($test as $key => $value){
          ?>

          <tr>
            <td><?php echo $value['client_code']; ?></td>
            <td>
              <object data="data:application/pdf;base64,<?php echo base64_encode($value['e_ticket'])?>" type="application/pdf"></object>
            </td>
            <td>
              <object data="data:application/pdf;base64,<?php echo base64_encode($value['accomodation_voucher'])?>" type="application/pdf"></object>
            </td>
            <td>
              <object data="data:application/pdf;base64,<?php echo base64_encode($value['transport_voucher'])?>" type="application/pdf"></object>
            </td>
            <td><?php echo $value['agent_code']; ?></td>
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
