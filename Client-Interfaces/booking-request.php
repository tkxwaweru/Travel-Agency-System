<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.booking.requests</title>
  <link rel="stylesheet" href="booking-request.css" />
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
        <a class="active" href="#">Booking requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="invoice-prompt.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a href="itineraries-prompt.php">Itineraries</a>
        <a href="code-information-prompt.php">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Booking requests</h2>
      <div class="payment-container">
        <h1>Booking request form</h1>
        <br>
        <p><h3>Fill the form below to make a booking request</h3></p>
        <p><h5>(These help our agents make a booking for you. Be as thorough as possible.)</h5></p>
        <br>

          <form action="" method="post">

            <div class="owner">
              <h3>Client code</h3>
              <div class="input-field">
                <input type="text" id="clientCode" name="client_code" required>
              </div>
            </div>

            <div class="owner">
              <h3>Origin</h3>
              <div class="input-field">
                <input type="text" id="origin" name="origin" placeholder="Where are you coming from?" required>
              </div>
            </div>

            <div class="owner">
              <h3>Destination</h3>
              <div class="input-field">
                <input type="text" id="destination" name="destination" placeholder="Where would you like to go?" required>
              </div>
            </div>

            <div class="owner">
              <h3>Traveller information</h3>
              <div class="input-field">
                <textarea id="travellerInformation" name="traveller_information" rows="4" cols="100" placeholder="How many people are travelling e.g. adults=2, children (under 18yrs)=2, infants (under 2yrs)=1" required></textarea>
              </div>
            </div>

            <div class="owner">
              <h3>Preferred flight class</h3>
              <div class="input-field">
                <input type="text" id="preferredFlightClass" name="preferred_flight_class" placeholder="e.g economy, business, first class..." required>
              </div>
            </div>

            <div class="owner">
              <h3>Departure date</h3>
              <div class="input-field">
                <input type="date" id="departureDate" name="departure_date" placeholder="When would you like to travel?" required>
              </div>
            </div>

            <div class="owner">
              <h3>Return date</h3>
              <div class="input-field">
                <input type="date" id="returnDate" name="return_date" placeholder="When would you like to return?" required>
              </div>
            </div>

            <div class="owner">
              <h3>Should we book your accomodation?</h3>
              <div class="options">
                <span class="option-input" for="option1">Yes</label>
                <input class="radio" type="radio" id="option1" name="book_accomodation" value="1">
                <span style="color: white;">_________</span>
                <span class="option-input" for="option2">No</label>
                <input class="radio" type="radio" id="option2" name="book_accomodation" value="0">
              </div>
            </div>

            <div class="owner">
              <h3>Accomodation description</h3>
              <div class="input-field">
                <textarea id="accomodationDescription" name="accomodation_description" rows="4" cols="100" placeholder="Tell us whatever you can about where you would like to stay e.g. Hotel/airbnb, hotel name, type of room etc."></textarea>
              </div>
            </div>

            <div class="owner">
              <h3>Should we book your transportation?</h3>
              <div class="options">
                <span class="option-input" for="option1">Yes</label>
                <input class="radio" type="radio" id="option1" name="book_transportation" value="1">
                <span style="color: white;">_________</span>
                <span class="option-input" for="option2">No</label>
                <input class="radio" type="radio" id="option2" name="book_transportation" value="0">
              </div>
            </div>

            <div class="owner">
              <h3>Transportation description</h3>
              <div class="input-field">
                <textarea id="accomodationDescription" name="accomodation_description" rows="4" cols="100" placeholder="Tell us whatever you can regarding how and where you would like to be transported. e.g. to and from where, the preferred type of car e.g. sedan, SUV & the capacity of the vehicle"></textarea>
              </div>
            </div>

            <div class="owner">
              <h3>Agent code</h3>
              <div class="input-field">
                <input type="text" id="agentCode" name="agent_code" placeholder="Enter your agent's code to confirm your booking request" required>
              </div>
            </div>
            <br>
            <button type="submit" name="confirm-request">Confirm</button>
          </form>
        </div>
    </div> 
    </div>
  </div>
</body>
</html>
