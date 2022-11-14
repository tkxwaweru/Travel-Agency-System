
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Payments</title>
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
        <a  href="view-invoices-prompt.php">View Invoices</a>
        <a  class="active"  href="payments-prompt.php">Payments</a>
        <a class="log-out-button" href="agent-login.php">Log out</a>
      </div>
    </nav>

    
    <div class="main-body">
      <h2>Payments</h2><br><br>
        <div class="table">
            <table>
                <tr>
                    <th>Payment ID</th>
                    <th>Client Code</th>
                    <th>Confirmation code</th>
                    <th>Payment Date</th>
                    <th>Issued</th>
                    <th>Edit</th>
                </tr>

                <?php
                  require('../Processes/DBCONNECT.php');
                  $client_code = $_POST['client_code'];

                  $sql = "SELECT * FROM mpesa_payments WHERE mpesa_payments.client_code = '$client_code' AND mpesa_payments.issued = '0'";
                  $result = mysqli_query($conn, $sql);
                  $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  foreach($test as $key => $value){
                  

                ?>
                <tr>
                    <td><?php echo $value['payment_id'] ?></td>
                    <td><?php echo $value['client_code'] ?></td>
                    <td><?php echo $value['confirmation_code'] ?></td>
                    <td><?php echo $value['payment_date'] ?></td>
                    <td><?php echo $value['issued'] ?></td>
                    <td><?php 

                          echo "<div class='wrapper'> 
                              <form action='payment-issued.php' method='POST'>
                              <input type='hidden' name='payment_id' value=".$value['payment_id']." />  
                              <button type='Submit' class='button' style='background-color:#d5e5ff; padding: 5px; border-radius:10px;'>Update </button>
                              </form> 
                              </div>"
                          ?></td>
                </tr>
                <?php
                  }
                ?>
            </table>

            <br><br><br>



    </div>
    </div>
  </div>
</body>
</html>
