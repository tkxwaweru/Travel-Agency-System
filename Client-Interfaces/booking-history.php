<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.booking.history</title>
  <link rel="stylesheet" href="booking-history.css">
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
        <a class="active" href="#">Booking history</a>
        <a href="invoice-prompt.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a href="itineraries-prompt.php">Itineraries</a>
        <a href="code-information-prompt.php" target="_blank">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Booking history</h2>

      <div class="table-container">
        <h1>Your booking history:</h1>

        <table>
          <tr>
            <th>Client code</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Departure date</th>
            <th>Return date</th>
            <th>Flight Airline</th>
            <th>Accomodation</th>
            <th>Transportation</th>
            <th>Total cost</th>
            <th>Agent code</th>
          </tr>

          <?php
          require('../Processes/DBCONNECT.php');
          $inputclientcode = $_POST['client_code'];

          $sql = "SELECT bookings.client_code, bookings.origin, bookings.destination, bookings.departure_date, bookings.return_date, bookings.flight_airline, bookings.accomodation, bookings.transportation, bookings.total_cost, bookings.agent_code FROM bookings WHERE bookings.client_code = '$inputclientcode'";
          $result = mysqli_query($conn, $sql);
          $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach($test as $key => $value){
          ?>

          <tr>
            <td><?php echo $value['client_code']; ?></td>
            <td><?php echo $value['origin']; ?></td>
            <td><?php echo $value['destination']; ?></td>
            <td><?php echo $value['departure_date']; ?></td>
            <td><?php echo $value['return_date']; ?></td>
            <td><?php echo $value['flight_airline']; ?></td>
            <td><?php echo $value['accomodation']; ?></td>
            <td><?php echo $value['transportation']; ?></td>
            <td><?php echo $value['total_cost']; ?></td>
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
