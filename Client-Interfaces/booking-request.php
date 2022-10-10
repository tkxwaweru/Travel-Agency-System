<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.booking.request</title>
  <link rel="stylesheet" href="booking-request.css" />
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
        <a href="client-dashboard-home.php">Home</a>
        <a href="explore-attractions.php">Explore attractions</a>
        <a class="active" href="booking-request.php">Booking requests</a>
        <a href="booking-history.php">Booking history</a>
        <a href="client-invoices.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Booking request from</h2>
      <div>
      <div id="multi-step-form-container">
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
                  <div class="mt-3">
                    <form action="" class="personal-info" id="personal">
                    
                        
                        <input type="text" name="fname" id="input-text" placeholder="Enter Your First Name" required><br>
                        
                        <input type="text" name="lname" id="input-text" placeholder="Enter Your Last Name" required><br>
        
                        <input type="email" name="email" id="input-text" placeholder="Enter Your Email" required><br>
                        
                        <input type="number" name="phone-number" id="input-text" placeholder="Enter Phone Number" required><br>
                        
                        <input type="text" name="identification" id="input-text" placeholder="Enter ID/Passport Number" required><br><br>
                      
                       
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
                     
                       
                           <select name="flight-type" id="input-text">
                            <option hidden selected>Flight Type</option>
                            <option value="One way">One Way</option>
                            <option value="Round Trip">Round Trip</option>
                           </select><br>
                           
                        
                            
                        
                        <input type="text" name="destination" id="input-text" placeholder="City from?" required><br>
                       
                        <input type="text" name="destination" id="input-text" placeholder="City to?" required><br>
                      
                       
                        
                        <select name="class"  id="input-text">
                            <option hidden selected>Flight Class</option>
                            <option value="1st Class">1st Class</option>
                            <option value="Business">Business Class</option>
                            <option value="Economy">Economy Class</option>
                        </select><br>
                        
                        <input type="number" name="adults" placeholder="How many adults? (18+)" id="input-text"><br>
                       
                        <input type="number" name="children" placeholder="How many children? (4-17)" id="input-text"><br>
                       
                        <input type="number" name="infants" placeholder="How many infants? (0-3)" id="input-text"><br>
                        <label for="depart">Depart Date</label>
                        <input type="date" name="depart" id="input-text" style="width:15%; margin-left:8%;" required><br>
                        <label for="return">Return Date</label>
                        <input type="date" name="return" id="input-text"  style="width:15%; margin-left:8%;" required><br><br>
                            
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
                        
                       
                        <select name="accomodation-type" id="input-text">
                            <option value="accomodation-type" hidden selected>Accomodation Type</option>
                            <option value="AirBnB">AirBnB</option>
                            <option value="Hotel">Hotel</option>
                        </select><br>
                        
                        <input type="number" name="rooms" id="input-text" placeholder="How many rooms"><br>
                      
                        <select name="type-of-room"  id="input-text">
                            <option value="Standard" hidden selected>Type Of Room</option>
                            <option value="Standard">Standard</option>
                            <option value="Executive">Executive</option>
                        </select><br>
                       
                        <select name="food"  id="input-text">
                            <option value="breakfast and lunch"hidden selected>Meal Plan</option>
                            <option value="breakfast and lunch">Breakfast & Lunch</option>
                            <option value="breakfast and dinner">Breakfast & Dinner</option>
                            <option value="breakfast, lunch and dinner">Breakfast, Lunch and Dinner</option>
                        </select><br>
                       
                        <select name="transport" id="input-text">
                            <option hidden selected>Mode Of Transport</option>
                            <option value="Taxi">Taxi</option>
                            <option value="Van">Van</option>
                        </select><br>
                       
                         <select name="type-of-bed" id="input-text">
                            <option hidden selected>Type Of Bed</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                         </select> <br>  
                           
                       
                       <select name="hotel-type" id="input-text">
                        <option hidden selected>Hotel Type</option>
                        <option value="1 star">1 Star</option>
                        <option value="2 Star">2 Star</option>
                        <option value="3 Star">3 Star</option>
                        <option value="4 Star">4 Star</option>
                        <option value="5 Star">5 Star</option>
                       </select><br>
                        
                        <select name="description" id="input-text">
                            <option hidden selected>Room Description</option>
                            <option value="rescription">Besides the Beach</option>
                            <option value="rescription">Has good view</option>
                            <option value="rescription">Quiet place</option>
                        </select><br>
                        
                    </form>
                    
                  </div>
                  <div class="mt-3">
                      <button class="button btn-navigate-form-step" type="button" step_number="2">Prev</button>
                      <button class="button submit-btn" type="submit">Save</button>
                  </div>
              </section>
          </form>
      </div>
    </div>
    </div>
    </div>

    <script>
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
  </div>
</body>
</html>
