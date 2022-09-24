<!DOCTYPE html>
<html>
	<head>
		<title>Client Registration Page</title>
		<link rel="stylesheet" href="client-registration.css">
	</head>
	<body>
		<form action="" method="post"> 
			<div class="registration-background">
        <div class="registration-form">
          <h1 class="title">Account registration</h1>
          <p class="instructions">Kindly fill your information below to create an account.</p>
          <hr>
          <br>

          <label class="label" for="first_name">First name</label>
          <input class="input-box" type="text" placeholder="Enter your first name" id="first_name" name="client_fname" required>
          <br><br>

          <label class="label" for="last_name">Last name</label>
          <input class="input-box" type="text" placeholder="Enter your last name" id="last_name" name="client_lname" required>
          <br><br>

          <label class="label" for="age">Age</label>      
          <input class="input-box" type="number" placeholder="Enter your age" id="age" name="age" required>
          <br><br>

          <div class="gender-details">
            <label class="label">Gender</label>
            <div class="genders">
              <br>
              <label class="gender" for="gender1">Male</label>
              <input class="radio" type="radio" id="gender1" name="sex" value="male">
              <span style="color: white;">_________</span>
              <label class="gender" for="gender2">Female</label>
              <input class="radio" type="radio" id="gender2" name="sex" value="female">
            </div>
          </div>
          <br>
          
          <label class="label" for="phone_number">Phone number</label>
          <input class="input-box" type="text" placeholder="Enter you phone number" id="phone_number" name="phone_number" required>
          <br><br>

          <label class="label" for="email">Email</label>
          <input class="input-box" type="text" placeholder="Enter your email address" id="email" name="client_email" required>
          <br><br> 

          <label class="label" for="password">Password</label>
          <input class="input-box" type="Password" id="password" name="password" required>
          <br><br>

          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px; "> Remember me
          </label>
          <br>
          
          <p> 
            Before creating an account you must agree to our<a href="" style="color:purple"> Terms & Conditions</a>
          </p>
          <span>I have read and agreed to the terms and conditions <input type="checkbox"></span>
          <br><br>
          
          <div class="buttons">
            <button type="button" class="cancel-button">Cancel</button>
            <button type="submit" class="register-button">Register</button>
          </div>
        </div>
      </div>  
		</form>
	</body>
</html>