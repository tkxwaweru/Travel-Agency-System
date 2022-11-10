
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.home</title>
  <link rel="stylesheet" href="client-dashboard-home.css" />
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
        <a class="active" href="#">Home</a>
        <a href="share-experiences.php">Share experiences</a>
        <a href="card-registration.php">Card registration</a>
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
      <h2>Home</h2>
      <div class="promo_card">
        <h1>Welcome:</h1>
        <p>Here are a few tips to get you going:</p>
        <p>
          <ol>
            <li>You are provided with a <b>client code</b> and your agent's <b>agent code</b></li>
            <li>You shall be prompted to enter you <b>client code</b> as you access some of the facilities on this dashboard</li>
            <li>In case you don't remember your <b>client code</b> you can use the <b>code information</b> facility on the sidebar</li>
          </ol>
        </p>
        <p><b>Click an option on the sidebar to get started</b></p>
        <br>
        <br>
        <br>
        <p>Feel free to contact us:</p>
        <ol>
          <li>Write us an email: <b>info@discoverkenya.co.ke</b></li>
          <li>Call us: <b>(+254)71234578</b> or <b>(+254)78524163</b></li>
        </ol>
        <br>
      </div>
    </div>
    </div>
  </div>
</body>
</html>
