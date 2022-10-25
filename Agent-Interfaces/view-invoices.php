
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Clients</title>
  <link rel="stylesheet" href="agentHome.css" />
  <link rel="stylesheet" href="clients.css">
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
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a  class="active"  href="view-invoices-prompt.php">View Invoices</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Invoices</h2><br><br>
        <div class="table">
            <table>
                <tr>
                    <th>Client Code</th>
                    <th>Agent Code</th>
                    <th>Flight Total</th>
                    <th>Accomodation Total</th>
                    <th>Transportation Total</th>
                    <th>Service Total</th>
                    <th>Service Charge</th>
                    <th>Subtotal</th>
                </tr>

                <?php
                  require('../Processes/DBCONNECT.php');
                  $agent_code = $_POST['agent_code'];

                  $sql = "SELECT invoices.client_code, invoices.agent_code, invoices.flight_total, invoices.accomodation_total, invoices.transportation_total, invoices.service_total, invoices.service_charge, invoices.subtotal FROM invoices WHERE invoices.agent_code = '$agent_code'";
                  $result = mysqli_query($conn, $sql);
                  $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  foreach($test as $key => $value){
                  

                ?>
                <tr>
                    <td><?php echo $value['client_code'] ?></td>
                    <td><?php echo $value['agent_code'] ?></td>
                    <td><?php echo $value['flight_total'] ?></td>
                    <td><?php echo $value['accomodation_total'] ?></td>
                    <td><?php echo $value['transportation_total'] ?></td>
                    <td><?php echo $value['service_total'] ?></td>
                    <td><?php echo $value['service_charge'] ?></td>
                    <td><?php echo $value['subtotal'] ?></td>
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
