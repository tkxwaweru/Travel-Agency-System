<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.payments</title>
  <link rel="stylesheet" href="client-payments.css" />
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
        <a href="card-registration.php">Card registration</a>
        <a href="booking-request.php">Booking requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="invoice-prompt.php">Invoices</a>
        <a class="active" href="#">Payment</a>
        <a href="itineraries-prompt.php">Itineraries</a>
        <a href="code-information-prompt.php">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Payments</h2>
      <div class="payment-container">
        <p><h3>Kindly follow the instructions below to successfully pay via M-PESA</h3></p>
        <p>
            <ol>
                <li>Fill in your phone number and the amount due under the Step 1 prompt.</li>
                <li>Confirm the payment on your mobile phone.</li>
                <li>Input your client code and M-PESA confirmation code under the Step 2 prompt.</li>
            </ol>
        </p>
        <br>
        <br>
        <h1>STEP 1: Make M-PESA payment</h1>
        <br>
        <form action="mpesa-test.php" method="post">
            <div class="owner">
              <h3>Phone Number</h3>
              <div class="input-field">
                <input type="text" id="clientCode" name="phone_number" placeholder="e.g 254..." required>
              </div>
            </div>
            <div class="owner">
              <h3>Amount</h3>
            <div class="input-field">
              <input type="text" id="confirmationCode" name="amount" required>
            </div>
            <br>
            <button type="submit">Make Payment</button>
        </form>

          <br>
          <br>
          <h1>STEP 2: Confirm payment</h1>
          <br>
          <form action="../Processes/m-pesa-process.php" method="post">
            <div class="owner">
              <h3>Client code</h3>
              <div class="input-field">
                <input type="text" id="clientCode" name="client_code" required>
              </div>
            </div>

            <div class="owner">
              <h3>Confirmation code</h3>
            <div class="input-field">
              <input type="text" id="confirmationCode" name="confirmation_code" required>
            </div>
            <br>
            <button type="submit" name="confirm-payment">Confirm</button>
          </form>
        </div>
    </div>
  </div>
</body>
</html>
