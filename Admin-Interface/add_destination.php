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
            <h1>Add Destination</h1>
        </div>

        <form>
        <div class="form">
        <div class="inputfield">
        <label>Destination Name</label>
        <input name="res_name" type="text" class="input">
        </div>  

        <div class="inputfield">
        <label>Region</label>
        <input name="reg" type="text" class="input">
        </div>  

        <div class="inputfield">
        <label>Image</label>    
        <input type="file" name="uploadfile" class"" value="" />
        </div>

        <div class="inputfield">
        <label>Description</label>
        <input name="des" type="textfield" class="input">
        </div>  
     
        <div class="inputfield">
        <input type="submit" value="Register" class="btn">
        </div>
        </div>
        </div>	

        </form>
        </center>  
        </div>
    </body> 
</html>