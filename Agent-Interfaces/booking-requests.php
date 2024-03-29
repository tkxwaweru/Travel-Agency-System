
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Booking Requests</title>
  <link rel="stylesheet" href="booking-request.css" />
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
        <a href="clients-prompt.php">Clients</a>
        <a href="make-booking.php">Make Booking</a>
        <a class="active" href="booking-requests-prompt.php">Booking Requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a  href="view-invoice-prompt.php">View Invoices</a>
        <a  href="payments-prompt.php">Payments</a>
        <a class="log-out-button" href="agent-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Booking Requests</h2><br><br>
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

                <?php
                  require('../Processes/DBCONNECT.php');
                  $agent_code = $_POST['agent_code'];

                  $sql = "SELECT * FROM booking_requests WHERE booking_requests.agent_code ='$agent_code' AND is_handled ='0'";

                  $result = mysqli_query($conn, $sql);
                  $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  foreach($test as $key => $value){
                  

                ?>
                <tr>
                    <td><?php echo $value['booking_request_id'] ?></td>
                    <td><?php echo $value['client_code'] ?></td>
                    <td><?php echo $value['origin'] ?></td>
                    <td><?php echo $value['destination'] ?></td>
                    <td><?php echo $value['traveller_information'] ?></td>
                    <td><?php echo $value['preferred_flight_class'] ?></td>
                    <td><?php echo $value['departure_date'] ?></td>
                    <td><?php echo $value['return_date'] ?></td>
                    <td><?php echo $value['book_accomodation'] ?></td>
                    <td><?php echo $value['accomodation_description'] ?></td>
                    <td><?php echo $value['book_transportation'] ?></td>
                    <td><?php echo $value['transportation_description'] ?></td>
                    <td><?php echo $value['agent_code'] ?></td>
                    <td><?php echo $value['is_handled'] ?></td>
                    <td><?php 

                        echo "<div class='wrapper'> 
                        <form action='ishandled.php' method='POST'>
                        <input type='hidden' name='booking_request_id' value=".$value['booking_request_id']." />  
                        <button type='Submit' class='button' style='background-color:#d5e5ff; padding: 5px; border-radius:10px;'>Update </button>
                        </form> 
                        </div>"
                        ?></td>
                    
                    
                    
                  
                    
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
