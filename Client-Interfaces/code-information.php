<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.code.information</title>
  <link rel="stylesheet" href="code-information.css">
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
        <a href="itineraries-prompt.php">Itineraries</a>
        <a class="active" href="#">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Code information</h2>

      <div class="table-container">
        <h1>Your code information:</h1>

        <table>
          <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Client code</th>
            <th>Agent's code</th>
          </tr>

          <?php
          require('../Processes/DBCONNECT.php');
          $inputclientemail = $_POST['client_email'];

          $sql = "SELECT clients.client_fname, clients.client_lname, clients.client_code, clients.agent_code FROM clients WHERE clients.client_email = '$inputclientemail'";
          $result = mysqli_query($conn, $sql);
          $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach($test as $key => $value){
          ?>

          <tr>
            <td><?php echo $value['client_fname']; ?></td>
            <td><?php echo $value['client_lname']; ?></td>
            <td><?php echo $value['client_code']; ?></td>
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
