<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Agent Login</title>
		<link rel="stylesheet" href="agent-login.css">
	</head>
	<body>
		<div class="registration-background">
      <div class="background-image">
        <img src="../Index/Images/passport.jpg" alt="background image">
      </div>
      <div class="registration-form">
        <div class="form-content">
          <h2>Login</h2>
          <form action="../Processes/agent-login-process.php" method="post"> 
            <div class="input">
              <span>Email</span>
              <input type="text" id="email" name="agent_email" required> 
            </div>
            <div class="input">
              <span>Password</span>
              <input type="Password" id="password" name="agent_password" required>
            </div>
            <div class="remember">
              <label><input type="checkbox">Remember me</label>
            </div>
            <div class="input">
              <button type="submit" name="login" class="register-button">Log in</button>
            </div>
            <div class="input">
              <p>Administrator? <a href="../Admin-Interface/admin-login.php">Log in here</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>  
	</body>
</html>
