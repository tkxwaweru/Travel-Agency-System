
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Booking History</title>
  <link rel="stylesheet" href="agentHome.css" />
  <link rel="stylesheet" href="clients.css" />
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
        <a href="booking-requests-prompt.php">Booking Requests</a>
        <a class="active" href="booking-history-prompt.php">Booking history</a>
        <a href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Booking History</h2><br><br>
      <div class="table">
        <table>
            <tr>
            <th>Booking ID</th>
            <th>Client Code</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Departure Date</th>
            <th>Return Date</th>
            <th>Flight Airline</th>
            <th>Accomodation</th>
            <th>Transportation</th>
            <th>Total Cost</th>
            <th>Agent Code</th>
            <th>Generated At</th>
            </tr>

            <?php
              require('../Processes/DBCONNECT.php');

              $agent_code = $_POST['agent_code'];
              
              $sql = "SELECT bookings.booking_id, bookings.client_code, bookings.origin, bookings.destination, bookings.departure_date, bookings.return_date, bookings.flight_airline, bookings.accomodation, bookings.transportation, bookings.total_cost, bookings.agent_code, bookings.`generated at` from bookings WHERE bookings.agent_code='$agent_code'";
              $result = mysqli_query($conn, $sql);
              $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
              foreach ($test as $key => $value){
            ?>


            <tr>
                <td><?php echo $value['booking_id'] ?></td>
                <td><?php echo $value['client_code'] ?></td>
                <td><?php echo $value['origin'] ?></td>
                <td><?php echo $value['destination'] ?></td>
                <td><?php echo $value['departure_date'] ?></td>
                <td><?php echo $value['return_date'] ?></td>
                <td><?php echo $value['flight_airline'] ?></td>
                <td><?php echo $value['accomodation'] ?></td>
                <td><?php echo $value['transportation'] ?></td>
                <td><?php echo $value['total_cost'] ?></td>
                <td><?php echo $value['agent_code'] ?></td>
                <td><?php echo $value['generated at'] ?></td>
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
