
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Home</title>
  <link rel="stylesheet" href="agentHome.css" />
  <link rel="stylesheet" href="clients.css" />
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
        <h4><h4>[Admin Name]</h4></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="agentHome.php">Home</a>
        <a href="clients.php">Clients</a>
        <a href="make-booking.php">Make Booking</a>
        <a class="active" href="booking-history.php">Booking history</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Booking History</h2><br><br>
      <div class="table">
        <table>
            <tr>
                <th>Booking Date</th>
                <th>Booking ID</th>
                <th>Client ID</th>
                <th>Depart</th>
                <th>Destination</th>
                <th>Depart Date</th>
                <th>Return Date</th>
                <th>Income</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>


    </div>
    </div>
  </div>
</body>
</html>
