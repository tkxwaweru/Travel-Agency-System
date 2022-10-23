<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.code.information.prompt</title>
  <link rel="stylesheet" href="code-information-prompt.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
        <a href="invoice-prompt.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a href="itineraries-prompt.php">Itineraries</a>
        <a class="active" href="#">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Code information</h2>
      <div class="payment-container">
        <h1>Confirm codes</h1>
        <br>
        <p><h3>Kindly enter your email address below to check your <b>client code</b> and agent's <b>agent code</b>:</h3></p>
        <br>
          <form action="" method="post">
            <div class="owner">
              <h3>Email:</h3>
              <div class="input-field">
                <input type="text" id="email" name="client_email" required>
              </div>
            </div>

            <br>
            <button type="submit" name="confirm-codes">Check codes</button>
          </form>
    </div> 
    </div>
  </div>
</body>
</html>
