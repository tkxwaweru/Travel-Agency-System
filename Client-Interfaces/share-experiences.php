<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.share.experiences</title>
  <link rel="stylesheet" href="share-experiences.css" />
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
        <a class="active" href="share-experiences.php">Share experiences</a>
        <a href="booking-request.php">Booking requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="invoice-prompt.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a href="itineraries-prompt.php">Itineraries</a>
        <a href="code-information-prompt.php">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Experiences</h2>
      <div class="payment-container">
        <h1>Share your experiences with us</h1>
        <br>
        <p><h3>Share one of your memorable travel experiences by filling the form below:</h3></p>
        <br>
          <form action="../Processes/share-experiences-process.php" method="post">
            <div class="owner">
              <h3>Image</h3>
              <div class="input-field">
                <input type="file" id="image" name="image" required>
              </div>
            </div>

            <div class="owner">
              <h3>Date</h3>
            <div class="input-field">
              <input type="date" id="date" name="date" required>
            </div>

            <div class="owner">
              <h3>Location</h3>
            <div class="input-field">
              <input type="text" id="location" name="location" required placeholder="Where did it take place? e.g. Nairobi, Mombasa...">
            </div>

            <div class="owner">
              <h3>Comment</h3>
            <div class="input-field">
              <input type="text" id="comment" name="comment" required placeholder="Tell us something brief about whats happening...">
            </div>
            <br>
            <button type="submit" name="confirm-payment">Confirm</button>
          </form>
    </div> 
    </div>
  </div>
</body>
</html>
