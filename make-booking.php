
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
        <h4 style="margin-bottom: 50px;"><?php  include("../Processes/agent-login-process.php"); ?><?php  echo $_SESSION['agent_email']; ?></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="agentHome.php">Home</a>
        <a href="clients.php">Clients</a>
        <a class="active" href="make-booking.php">Make Booking</a> 
        <a href="booking-requests.php">Booking Requests</a>
        <a href="booking-history.php">Booking history</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
     
      <div class="make-booking">
        <div class="make-booking-title">
          <span><h2>Make Booking</h2>
        </div>
        
        <div class="icons">
          <a href="https://www.expedia.com"> <button style="font-size:24px">Book Flight <i class="material-icons">flight</i></button></a>
          
          <a href="https://www.booking.com"><button style="font-size:24px">Book Hotel <i class="material-icons">hotel</i></button></a>
          
        </div>
      </div>
        
        
      
     
      <div class="top">
        
        <div class="invoice" id="invoice-form">
            <h3>MAKE INVOICE</h3><br>   
            <form action="">
                
                <input type="number" id="input-text" placeholder="Client ID" style="width: 100%;"><br>
                
                <input type="number" id="input-text" id="fprice" placeholder="Flight Price" style="width: 100%"><br>
               
                <input type="number" name="hotel" id="input-text" placeholder="Hotel Price" style="width: 100%;"><br>
               
                <input type="number" name="transport" id="input-text" placeholder="Transport Price" style="width: 100%;"><br><br>
                <input type="submit" name="make-invoice"  value="Generate Invoice" id="button">
                <input type="datetime" hidden>
            </form>
        </div>
            
    </div>

    </div>
    </div>









</body>
</html>
