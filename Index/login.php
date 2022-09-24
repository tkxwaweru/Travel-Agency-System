<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<form action="" method="post"> 
			<div class="login-background">
        <div class="login-form">
          <h1 class="title">Login</h1>
          <hr>
          <br>

          <label class="label" for="email">Email</label>
          <input class="input-box" type="text" placeholder="Enter your email address" id="email" name="client_email" required>
          <br><br> 

          <label class="label" for="password">Password</label>
          <input class="input-box" type="Password" id="password" name="password" required>
          <br><br>
          
          <div class="buttons">
            <button type="submit" class="login-button">Log in</button>
          </div>
        </div>
      </div>  
		</form>
	</body>
</html>
