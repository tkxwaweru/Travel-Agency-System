<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
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
        <h4>[user first name]</h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a class="active" href="client-dashboard-home.php">Home</a>
        <a href="explore-attractions.php">Explore attractions</a>
        <a href="booking-request-test.php">Booking requests</a>
        <a href="booking-history.php">Booking history</a>
        <a href="client-invoices.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Home</h2>
      <div class="promo_card">
        <h1>Welcome [user first name].</h1>
        <span>Use the sidebar to access a variety of options.</span>
        <button href="#">BOOK NOW</button>
      </div>
    </div>
    </div>
  </div>
</body>
</html>
