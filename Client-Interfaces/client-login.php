<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Client Login</title>
		<link rel="stylesheet" href="client-login.css">
	</head>
	<body>
		<div class="registration-background">
      <div class="background-image">
        <img src="Images/maasai-women.jpg" alt="background image">
      </div>
      <div class="registration-form">
        <div class="form-content">
          <h2>Login</h2>
          <form action="../Processes/login-process.php" method="post"> 
            <div class="input">
              <span>Email</span>
              <input type="text" id="email" name="client_email" required> 
            </div>
            <div class="input">
              <span>Password</span>
              <input type="Password" id="password" name="password" required>
            </div>
            <div class="remember">
              <label><input type="checkbox">Remember me</label>
            </div>
            <div class="input">
              <button type="submit" name="register-button" class="register-button">Log in</button>
            </div>
            <div class="input">
              <p>Don't have an account? <a href="client-registration.php">Sign up</a></p>
              <br>
              <p><a href="../Index/index.php">Back to home</a></p>
            </div>
          </form>
          <script>

          </script>
        </div>
      </div>
    </div>  
	</body>
</html>
