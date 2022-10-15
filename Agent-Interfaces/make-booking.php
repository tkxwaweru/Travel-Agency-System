
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Home</title>
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
        <a href="booking-history.php">Booking history</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <div class="book-btn" style="display: flex;">
        <span><h2>Make Booking</h2>
        </span> <input type="button" name="back" value="BACK" id="back-button" style="width: 100px; margin-left: 50px;" onclick="back()" hidden>
      </div>
     
      <div class="top">
        
        <div class="invoice" id="invoice-form">
            <h3>MAKE INVOICE</h3><br>   
            <form action="">
                
                <input type="number" id="input-text" placeholder="Client ID" style="width: 100%;"><br>
                
                <input type="number" id="input-text" placeholder="Flight Price" style="width: 100%;"><br>
               
                <input type="number" name="hotel" id="input-text" placeholder="Hotel Price" style="width: 100%;"><br>
               
                <input type="number" name="transport" id="input-text" placeholder="Transport Price" style="width: 100%;"><br><br>
                <input type="submit" name="make-invoice"  value="Generate Invoice" id="button">
                <input type="datetime" hidden>
            </form>
        </div>
            <div class="flight" id="book-flight">
                <a href="https://www.expedia.com"><div class="layer"><h1>Book a Flight</h1></div></a>
                
            </div>
            <div class="hotel" id="book-hotel">
                <a href="https://www.booking.com"><div class="layer"><h1>Book a Hotel</h1></div></a>  
            </div>
    </div>

    <div class="client-info" id="information-search">
                        
        <h3>CLIENT INFORMATION</h3><br>
        
        <input type="number" id="input-text" placeholder="Client ID"><br><br>
        <input type="submit" name="search" value="SEARCH" id="button" style="width: 100px ;" onclick="search()">
    </div>

    <div id="multi-step-form-container" hidden>
      <!-- Form Steps / Progress Bar -->
      <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
          <!-- Step 1 -->
          <li class="form-stepper-active text-center form-stepper-list" step="1">
              <a class="mx-2">
                  <span class="form-stepper-circle">
                      <span>1</span>
                  </span>
                  <div class="label">Personal information</div>
              </a>
          </li>
          <!-- Step 2 -->
          <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
              <a class="mx-2">
                  <span class="form-stepper-circle text-muted">
                      <span>2</span>
                  </span>
                  <div class="label text-muted">Flight & travel</div>
              </a>
          </li>
          <!-- Step 3 -->
          <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
              <a class="mx-2">
                  <span class="form-stepper-circle text-muted">
                      <span>3</span>
                  </span>
                  <div class="label text-muted">Accomodation</div>
              </a>
          </li>
      </ul>
      <!-- Step Wise Form Content -->
      <form id="userAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data" method="POST">
          <!-- Step 1 Content -->
          <section id="step-1" class="form-step">
             
              <!-- Step 1 input fields -->
              <div class="mt-3 client-info">
                <form action="" class="personal-info" id="personal">
                
                    <label for="fname">First Name</label><br>
                    <input type="text" name="fname" id="input-text" placeholder="[First Name]" readonly><br>
                    <label for="lname">Last Name</label><br>
                    <input type="text" name="lname" id="input-text" placeholder="[Last Name]" readonly><br>
                  <label for="email">Email</label><br>
                    <input type="email" name="email" id="input-text" placeholder="[Email]" readonly><br>
                    <label for="phone-number">Phone Number</label><br>
                    <input type="number" name="phone-number" id="input-text" placeholder="[Phone Number]" readonly><br>
                    <label for="identification">ID/Passport Number</label><br>
                    <input type="text" name="identification" id="input-text" placeholder="[ID/Passport Number]" readonly><br><br>
                  
                   
                </form>
              </div>
              <div class="mt-3">
                  <button class="button btn-navigate-form-step" type="button" step_number="2">Next</button>
              </div>
          </section>
          <!-- Step 2 Content, default hidden on page load. -->
          <section id="step-2" class="form-step d-none">
            
              <!-- Step 2 input fields -->
              <div class="mt-3">
                <form action="" class="flight-info" id="flight">
                 
                   
                   
                       
                    <label for="flight-type">Flight Type</label><br>
                   <input type="text" placeholder="[Flight Type]" name="flight-type" id="input-text"readonly> <br>
                    <label for="city-from">City From</label><br>
                    <input type="text" name="city-from" id="input-text" placeholder="[City from]" readonly><br>
                   <label for="destination">Destination</label><br>
                    <input type="text" name="destination" id="input-text" placeholder="[Destination]" readonly><br>
                  
                   
                    
                  <label for="flight-class">Flight Class</label><br>
                    <input type="text" placeholder="[Flight Class]"id="input-text" name="flight-class" readonly> <br>
                    <label for="adults">Adults (18+)</label><br>
                    <input type="number" name="adults" placeholder="[Adults (18+)]" id="input-text"readonly><br>
                   <label for="children">Children (4-17)</label><br>
                    <input type="number" name="children" placeholder="[Children (4-17)]" id="input-text"readonly><br>
                  <label for="infants">Infants (0-3)</label><br>
                    <input type="number" name="infants" placeholder="[Infant (0-3)]" id="input-text"readonly><br>
                    <label for="depart">Depart Date</label>
                    <input type="text" name="depart" id="input-text" placeholder="[Depart Date]" style="width:20%; margin-left:8%;" readonly><br>
                    <label for="return">Return Date</label>
                    <input type="text" name="return" id="input-text" placeholder="[Return Date]"  style="width:20%; margin-left:8%;" readonly><br><br>
                        
                </form>
              </div>
              <div class="mt-3">
                  <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
                  <button class="button btn-navigate-form-step" type="button" step_number="3">Next</button>
              </div>
          </section>
          <!-- Step 3 Content, default hidden on page load. -->
          <section id="step-3" class="form-step d-none">
             
              <!-- Step 3 input fields -->
              <div class="mt-3">
                <form action=""class="accomodation-info" id="accomodation" >
                    <label for="acc-type">Accomodation type</label><br>
                    <input type="text" placeholder="[Accomodation Type]" id="input-text" name="acc-type" readonly> <br>
                    <label for="rooms">Rooms</label><br>
                    <input type="number" name="rooms" id="input-text" placeholder="[Rooms]" readonly><br>
                    <label for="type-of-room">Type of Room</label><br>
                    <input type="text" placeholder="[Type Of Room]" id="input-text" name="type-of-room" readonly> <br>
                    <label for="meal-plan">Meal Plan</label><br>
                     <input type="text" placeholder="[Meal Plan]"id="input-text" name="meal-plan" readonly > <br>
                     <label for="mode-of-transport">Mode of Transport</label><br>
                     <input type="text" placeholder="[Mode Of Transport]"id="input-text" name="mode-of-transport" readonly> <br>
                     <label for="type-of-bed">Type of Bed</label><br>
                     <input type="text" placeholder="[Type Of Bed]"id="input-text" name="type-of-bed" readonly>  <br>
                     <label for="room-description">Room Description</label><br>
                   <input type="text" placeholder="[Room Description]" id="input-text" name="room-description" readonly> <br>
                    
                </form>
                
              </div>
              <div class="mt-3">
                  <button class="button btn-navigate-form-step" type="button" step_number="2">Prev</button>
              </div>
          </section>
      </form>
  </div>
    </div>
    </div>
  </div>




  <script>

    var invoice = document.getElementById('invoice-form');
    var flight = document.getElementById('book-flight');
    var hotel = document.getElementById('book-hotel');
    var info = document.getElementById('multi-step-form-container');
    var clientInfo = document.getElementById('information-search');
    var backbtn = document.getElementById('back-button');

    function search(){
        invoice.style.opacity = 0;
        flight.style.opacity = 0;
        hotel.style.opacity = 0;
        clientInfo.style.opacity = 0;
        backbtn.style.display='block';
        info.style.display='block';
        info.style.marginTop = '-470px';
    }
    function back(){
      invoice.style.opacity = 100;
        flight.style.opacity = 100;
        hotel.style.opacity = 100;
        clientInfo.style.opacity = 100;
        backbtn.style.display='none';
        info.style.display='none';
        info.style.marginTop = '-470px';
    }



    /**
* Define a function to navigate betweens form steps.
* It accepts one parameter. That is - step number.
*/
const navigateToFormStep = (stepNumber) => {
/**
 * Hide all form steps.
 */
document.querySelectorAll(".form-step").forEach((formStepElement) => {
    formStepElement.classList.add("d-none");
});
/**
 * Mark all form steps as unfinished.
 */
document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
    formStepHeader.classList.add("form-stepper-unfinished");
    formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
});
/**
 * Show the current form step (as passed to the function).
 */
document.querySelector("#step-" + stepNumber).classList.remove("d-none");
/**
 * Select the form step circle (progress bar).
 */
const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
/**
 * Mark the current form step as active.
 */
formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
formStepCircle.classList.add("form-stepper-active");
/**
 * Loop through each form step circles.
 * This loop will continue up to the current step number.
 * Example: If the current step is 3,
 * then the loop will perform operations for step 1 and 2.
 */
for (let index = 0; index < stepNumber; index++) {
    /**
     * Select the form step circle (progress bar).
     */
    const formStepCircle = document.querySelector('li[step="' + index + '"]');
    /**
     * Check if the element exist. If yes, then proceed.
     */
    if (formStepCircle) {
        /**
         * Mark the form step as completed.
         */
        formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
        formStepCircle.classList.add("form-stepper-completed");
    }
}
};
/**
* Select all form navigation buttons, and loop through them.
*/
document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
/**
 * Add a click event listener to the button.
 */
formNavigationBtn.addEventListener("click", () => {
    /**
     * Get the value of the step.
     */
    const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
    /**
     * Call the function to navigate to the target form step.
     */
    navigateToFormStep(stepNumber);
});
});
</script>

</body>
</html>
