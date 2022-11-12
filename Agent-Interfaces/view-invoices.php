
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Invoices</title>
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
        <a href="clients-prompt.php">Your Clients</a>
        <a href="make-booking.php">Make Booking</a>
        <a href="booking-requests-prompt.php">Booking Requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a  class="active"  href="view-invoices-prompt.php">View Invoices</a>
        <a  href="payments-prompt.php">Payments</a>
        <a class="log-out-button" href="agent-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Invoices</h2><br><br>
        <div class="table">
            <table>
                <tr>
                    <th>Invoice ID</th>
                    <th>Client Code</th>
                    <th>Agent Code</th>
                    <th>Flight Total</th>
                    <th>Accomodation Total</th>
                    <th>Transportation Total</th>
                    <th>Service Total</th>
                    <th>Service Charge</th>
                    <th>Subtotal</th>
                    <th>Edit</th>
                </tr>

                <?php
                  require('../Processes/DBCONNECT.php');
                  $agent_code = $_POST['agent_code'];

                  $sql = "SELECT invoices.issued,invoices.invoice_id, invoices.client_code, invoices.agent_code, invoices.flight_total, invoices.accomodation_total, invoices.transportation_total, invoices.service_total, invoices.service_charge, invoices.subtotal FROM invoices WHERE invoices.agent_code = '$agent_code' AND invoices.issued='0'";
                  $result = mysqli_query($conn, $sql);
                  $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  foreach($test as $key => $value){
                  

                ?>
                <tr>
                    <td><?php echo $value['invoice_id'] ?></td>
                    <td><?php echo $value['client_code'] ?></td>
                    <td><?php echo $value['agent_code'] ?></td>
                    <td><?php echo $value['flight_total'] ?></td>
                    <td><?php echo $value['accomodation_total'] ?></td>
                    <td><?php echo $value['transportation_total'] ?></td>
                    <td><?php echo $value['service_total'] ?></td>
                    <td><?php echo $value['service_charge'] ?></td>
                    <td><?php echo $value['subtotal'] ?></td>
                    <td><?php
                        
                      echo "<div class='wrapper'> 
                              <form action='invoice-issued.php' method='POST'>
                              <input type='hidden' name='invoice_id' value=".$value['invoice_id']." />  
                              <button type='Submit' class='button' style='background-color:#d5e5ff; padding: 5px; border-radius:10px;'>Update </button>
                              </form> 
                              </div>"
                          ?></td>
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
