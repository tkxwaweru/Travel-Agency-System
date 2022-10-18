<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Client Registration</title>
		<link rel="stylesheet" href="client-registration.css">
	</head>
	<body>
		<div class="registration-background">
      <div class="background-image">
        <img src="Images/safari.jpg" alt="background image">
      </div>
      <div class="registration-form">
        <div class="form-content">
          <h2>Registration</h2>
          <form action="../Processes/registration-process.php" method="post"> 
            <div class="input">
              <span>First name</span>
              <input type="text" id="first_name" name="client_fname" required>
            </div>
            <div class="input">
              <span>Last name</span>
              <input type="text" id="last_name" name="client_lname" required>
            </div>
            <div class="input">
              <span>Age</span>
              <input type="number" id="age" name="age" required>
            </div>
            <div class="gender-details">
              <span>Gender</span>
              <div class="genders">
                <span class="gender-input" for="gender1">Male</label>
                <input class="radio" type="radio" id="gender1" name="sex" value="male">
                <span style="color: white;">_________</span>
                <span class="gender-input" for="gender2">Female</label>
                <input class="radio" type="radio" id="gender2" name="sex" value="female">
              </div>
            </div>
            <div class="input">
              <span>Phone number</span>
              <input type="text" id="phone_number" name="phone_number" required>
            </div>
            <div class="input">
              <span>Email</span>
              <input type="text" id="email" name="client_email" required> 
            </div>
            <div class="input">
              <span>Password</span>
              <input type="Password" id="password" name="password" required>
            </div>
            <div class="input">
              <button type="submit" class="register-button">Register</button>
            </div>
          </form>
          <br>
          <span><a href="../Index/index.php">Back to home</a></span>
        </div>
      </div>
    </div>  
	</body>
</html>