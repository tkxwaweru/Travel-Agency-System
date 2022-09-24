<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="Admin.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <?php
        include 'Admin_css.php';
        ?>

    </head>
    <body>
        
         <?php
         include 'Admin_sidebar.php';
          ?>
        
        <center>
        <div class="content">
            <h1>Add Agent</h1>
        </div>

        <form> 
        <label for = "fname"> First Name</label>
     	<input type="text" id ="fname" name="first_name">
        <br><br>

        <label for = "lname"> Last Name</label>
  	    <input type="text" id ="lname" name="last_name"readonly>
        <br><br>

        <label for = "pnumber"> Phone Number</label>
  	    <input type="text" id ="pnumber" name="phone_number">
  	    <br><br>

        <label for = "email"> Email</label>
    	<input type="email" id ="email" name="email">
    	<br><br>

        <label for = "password"> Password</label>
    	<input type="password" id ="password" name="password">
    	<br><br>

        <button class="submit">Submit</button>
    	<br><br>

        </form>  
        </center>  
        </div>
    </body> 
</html>