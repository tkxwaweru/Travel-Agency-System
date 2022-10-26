
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <title>Make Booking</title>
  <link rel="stylesheet" href="make-booking.css">
  
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
        <h4></h4><?php  include("../Processes/agent-login-process.php"); ?><?php  echo $_SESSION['agent_email']; ?><h4></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="agentHome.php">Home</a>
        <a href="clients-prompt.php">Clients</a>
        <a class="active" href="make-booking.php">Make Booking</a> 
        <a href="booking-requests-prompt.php">Booking Requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="itinerary.php">Itinerary</a>
        <a  href="invoice.php">Invoice</a>
        <a  href="payments-prompt.php">Payments</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
     
      <div class="make-booking">
        <div class="make-booking-title">
          <span><h2>Make Booking</h2>
        </div>
        
        <div class="icons">
         <a href="https://www.expedia.com" target="_blank"><button style="font-size:24px">Book Flight <i class="material-icons">flight</i></button></a>
        
          <a href="https://www.booking.com" target="_blank"><button style="font-size:24px">Book Hotel <i class="material-icons">hotel</i></button></a>
          <a href="https://www.viator.com/Kenya-tours/Transfers-and-Ground-Transport/d801-g15" target="_blank"><button style="font-size:24px">Transport <i class="fa fa-automobile"></i></button></a>
        </div>
      </div>
        
        
      
     
      <div class="top">
        
        <div class="invoice" id="invoice-form">
          
            <form action="../Processes/make-booking-process.php" method="post">
                
                <input type="text" id="input-text" name="client_code" placeholder="Client Code" style="width: 100%;"><br>

                <input type="text" id="input-text" name="origin" placeholder="Origin" style="width: 100%;"><br>

                <input type="text" id="input-text" name="destination" placeholder="Destination" style="width: 100%;"><br>
                
                <label for="dDate" style="width: 20%; padding-right: 19%; color: gray;">Depart Date</label>
                <input type="date" id="input-text" name="dDate" style="width: 60%"><br>

                <label for="rDate" style="width: 20%; padding-right: 19%; color: gray;">Return Date</label>
                <input type="date" id="input-text" name="rDate" style="width: 60%"><br>
               
                <input type="text" id="input-text" name="airline" placeholder="Flight Airline" style="width: 100%;"><br>
               
                <input type="text" id="input-text" name="transport" placeholder="Transportion" style="width: 100%;"><br>
              
                <input type="text" id="input-text" name="accomodation" placeholder="Accomodation" style="width: 100%;"><br>

                <input type="text" id="input-text" name="agent_code" placeholder="Agent Code" style="width: 100%;"><br>
                
                <input type="number" id="input-text" name="total_cost" placeholder="Total Cost" style="width: 100%;"><br><br><br>

                <input type="submit" name="make-booking"  value="Make Booking" id="button" style=
    "width: 100px;
    padding: 10px;
    margin-top: 10px;
    background-color: #aec6cf;
    text-align: center;">
            </form>
        </div>
            
    </div>

    </div>
    </div>









</body>
</html>
