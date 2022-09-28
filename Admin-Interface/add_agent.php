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
        <div class="wrapper">
        <div class="content">
            <h1>Add Agent</h1>
        </div>

        <form>
        <div class="form">
        <div class="inputfield">
        <label>First Name</label>
        <input name="fname" type="text" class="input">
        </div>  

        <div class="inputfield">
        <label>Last Name</label>
        <input name="lname" type="text" class="input">
        </div>  

        <div class="inputfield">
        <label>Phone Number</label>
        <input name="pnumber" type="text" class="input">
        </div>  

        <div class="inputfield">
        <label>Region</label>
        <input name="region" type="text" class="input">
        </div>

        <div class="inputfield">
        <label>Email</label>
        <input name="email" type="email" class="input">
        </div>  

        <div class="inputfield">
        <label>Password</label>
        <input name="password" type="password" class="input">
        </div>  
     
        <div class="inputfield">
        <input type="submit" value="ADD" class="btn">
        </div>
        </div>
        </div>	

        </form>
        </center>  
        </div>
    </body> 
</html>