<!DOCTYPE html>
<html>
  <head>
    <title>Discover Kenya</title>
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  </head>
  <body>
    <!--------------------------------HEADER HTML---------------------------------------------->
    <div class="header-container">
      <video autoplay loop muted plays-inline class="background-video">
        <source src="Images/background-video.mp4" type="video/mp4">
      </video>

      <nav>
        <img src="Images/Logo.png" alt="Discover Kenya Logo" class="logo">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="../Client-Interfaces\client-login.php">LOGIN</a></li>
          <li><a href="../Client-Interfaces/experiences.php">EXPERIENCES</a></li>
          <li><a href="../Client-Interfaces/contact-us.php">CONTACT US</a></li>
        </ul>
      </nav>

      <div class="description">
        <h1>Experience Kenya's beauty</h1>
        <br>
        <h2>Create an account, make a booking request and leave the rest to us.</h2>
        <br>
        <a href="../Client-Interfaces/client-registration.php">SIGN UP</a>
      </div>
    </div>
    <!----------------------------------------------------------------------------------->

    <!------------------------------------BENEFITS LIST------------------------------------------->
    <div class="benefits-list">
      <div class="benefit">
        <img class="benefit-icon" src="Images\destination-icon.png" alt="Destinaton icon">
        <h3>Spectacular Destinations</h3>
        <p class="benefit-1">
          From the sandy beaches to the diverse wildlife, Kenya's attractions are sure to amaze.
        </p>
      </div>
      <div class="benefit">
        <img class="benefit-icon" src="Images\discount-icon.png" alt="Destinaton icon">
        <h3>Offers & Discounts</h3>
        <p class="benefit-2">
          We offer various seasonal offers and discounts to ease travel costs.
        </p>
      </div>
      <div class="benefit">
        <img class="benefit-icon" src="Images\support-icon.png" alt="Destinaton icon">
        <h3>Amazing Customer Support</h3>
        <p class="benefit-3">
          Our highly trained team of travel agents are always ready to assist you with your booking related issues. 
        </p>
      </div>
      <div class="benefit">
        <img class="benefit-icon" src="Images\booking-logo.png" alt="Destinaton icon">
        <h3>Easy bookings</h3>
        <p class="benefit-4">
          All you need to do is tell us where you want to go and stay and we'll handle the rest.
        </p>
      </div>
    </div>
    <!----------------------------------------------------------------------------------->
    <!-------------------------------Testimonials content-------------------------------------->
  </p><div class="testimonials">
    <div class="inner">
      <h1>Hear from our clients:</h1>
      <div class="border"></div>

      <div class="row">
        <div class="col">
          <div class="testimonial">
            <img src="Images/satisfaction-2.jpg" alt="User image">
            <div class="name">Julius Kavita</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>

            <p>
              Travelling to a new place could be difficult but with Discover Kenya my family and I 
              have had an incredible travel experience to different parts of Kenya. I whole-heartedly recommend them.
            </p>
          </div>
        </div>

        <div class="col">
          <div class="testimonial">
            <img src="Images/satisfaction-1.jpg" alt="User image">
            <div class="name">Rose Daniel</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>

            <p>
            Works like a charm. I love the ease of the booking process and would highly
            recommend using their services for any safari plans you might have.
            </p>
          </div>
        </div>

        <div class="col">
          <div class="testimonial">
            <img src="Images/satisfaction-3.jpg" alt="User image">
            <div class="name">Michelle Lulu</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>

            <p>
              Discover Kenya was amazing in helping us book our first kenyan beach experience.
              They are very accomodating.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!----------------------Attractions gallery-------------------------------------------->
    <div class="gallery-container">
      <h1>Here's just a fraction of what our clients have experienced</h1>
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="Images/maasai-mara-balloons.jpg" alt="">
        </div>
        <div class="gallery-description">The Maasai mara</div>
      </div>
  
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="Images\maasai-tourist.jpg" alt="">
        </div>
        <div class="gallery-description">Kenya's tribes</div>
      </div>
      
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="Images\fort-jesus.jpg" alt="">
        </div>
        <div class="gallery-description">Historical sites</div>
      </div>
  
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="Images/mombasa-serena.jpg" alt="">
        </div>
        <div class="gallery-description">Luxurious hotels</div>
      </div>
  
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="Images\mombasa-camel.jpg" alt="">
        </div>
        <div class="gallery-description">Sandy beaches</div>
      </div>
  
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="Images/mountain-bongo-laikipia.jpg" alt="">
        </div>
        <div class="gallery-description">Diverse wildlife</div>
      </div>
    </div>
    <div class="attractions-link"><a href="../Client-Interfaces/experiences.php">Explore</a></div>
     <!-------------------------------Footer-------------------------------------------->
    <footer class="footer">
      <div class="container">
        <div class="row"> 
          <div class="footer-col">
              <h4>Useful links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="../Client-Interfaces/client-registration.php">Sign up</a></li>
                <li><a href="../Client-Interfaces/client-login.php">Login</a></li>
                <li><a href="../Agent-Interfaces/agent-login.php">Management system</a></li>
              </ul>
          </div> 

          <div class="footer-col">
              <h4>Support</h4>
              <ul>
                <li><a href="../Client-Interfaces/FAQ.php">FAQs</a></li>
                <li><a href="../Client-Interfaces/contact-us.php"> Contact us</a></li>
                <li><a href="../Client-Interfaces/client-login.php">Booking requests</a></li>
                <li><a href="../Client-Interfaces/experiences.php">Experiences</a></li>
              </ul>
          </div> 
      
          <div class="footer-col">
              <h4>Affiliate links</h4>
              <ul>
                <li><a href="https://www.serenahotels.com/" target="_blank">Serena hotels</a></li>
                <li><a href="https://kenyatoursandsafaris.com/" target="_blank">Kenya tours</a></li>
                <li><a href="https://www.viator.com/Kenya-tours/Transfers-and-Ground-Transport/d801-g15" target="_blank">Viator</a></li>
                <li><a href="https://www.kenya-airways.com/ke/en/?gclid=EAIaIQobChMIpcfmvvXE-gIVk_t3Ch0oTw1EEAAYASAAEgL8qvD_BwE" target="_blank">Kenya Airways</a></li>
              </ul>
          </div> 
      
          <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
              <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>  
        </div>
      </div> 
    </footer>

  </body>
</html>
