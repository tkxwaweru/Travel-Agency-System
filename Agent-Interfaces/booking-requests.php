
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Booking Requests</title>
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
        <a href="clients.php">Clients</a>
        <a href="make-booking.php">Make Booking</a>
        <a class="active" href="booking-requests.php">Booking Requests</a>
        <a href="booking-history.php">Booking history</a>
        <a href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Assigned Clients</h2><br><br>
        <div class="table">
            <table>
                <tr>
                    <th>Booking Request ID</th>
                    <th>Client Code</th>
                    <th>Origin </th>
                    <th>Destination</th>
                    <th>Traveller Information</th>
                    <th>Preferred Flight Class</th>
                    <th>Departure Date</th>

                    <th>Return Date</th>
                    <th>Book Accomodation</th>
                    <th>Accomodation Description</th>
                    <th>Book Transportation</th>
                    <th>Transportation Description</th>
                    <th>Agent Code</th>
                    <th>Is Handled</th>
                    <th>Edit</th>

                   
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
