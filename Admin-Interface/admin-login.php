<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Administrator Login</title>
		<link rel="stylesheet" href="admin-login.css">
	</head>
	<body>
		<div class="registration-background">
      <div class="background-image">
        <img src="../Index/Images/admin.jpg" alt="background image">
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
              <button type="submit" class="register-button">Log in</button>
            </div>
          </form>
        </div>
      </div>
    </div>  
	</body>
</html>