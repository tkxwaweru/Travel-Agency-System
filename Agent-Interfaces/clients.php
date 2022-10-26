
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
        <a class="active" href="clients-prompt.php">Clients</a>
        <a href="make-booking.php">Make Booking</a>
        <a href="booking-requests-prompt.php">Booking Requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a  href="view-invoices-prompt.php">View Invoices</a>
        <a  href="payments-prompt.php">Payments</a>
        <a class="log-out-button" href="agent-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Assigned Clients</h2><br><br>
        <div class="table">
            <table>
                <tr>
                    <th>Client Code</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>ID Number</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                </tr>

                <?php
                  require('../Processes/DBCONNECT.php');
                  $agent_code = $_POST['agent_code'];

                  $sql = "SELECT clients.client_code, clients.client_fname, clients.client_lname, clients.national_id, clients.age, clients.sex, clients.phone_number, clients.phone_number, clients.client_email FROM clients WHERE clients.agent_code = '$agent_code'";
                  $result = mysqli_query($conn, $sql);
                  $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  foreach($test as $key => $value){
                  

                ?>
                <tr>
                    <td><?php echo $value['client_code'] ?></td>
                    <td><?php echo $value['client_fname'] ?></td>
                    <td><?php echo $value['client_lname'] ?></td>
                    <td><?php echo $value['national_id'] ?></td>
                    <td><?php echo $value['age'] ?></td>
                    <td><?php echo $value['sex'] ?></td>
                    <td><?php echo $value['phone_number'] ?></td>
                    <td><?php echo $value['client_email'] ?></td>
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
