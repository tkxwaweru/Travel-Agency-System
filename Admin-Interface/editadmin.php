<?php 

$admin_id = $_POST['admin_id']; 

 
 

require("../Processes/DBCONNECT.php"); 

$sql = "SELECT * FROM admin where admin_id='$admin_id'"; 

$result = mysqli_query($conn, $sql); 

 
 

        if (mysqli_num_rows($result) === 1) { 

            $data = mysqli_fetch_assoc($result); 

            echo "<div class='wrapper'> 

        <form action='editadminprocess.php' method='POST'> 

        <input type='hidden' name='hiddenadmin_id' value=".$admin_id." /> 

        <p>admin_id:</p> 

        <input type='text' name='admin_id' value=".$data['admin_id']." /> 

        <p>Name:</p> 

        <input type='text' name='admin_name' value=".$data['admin_name']." /> 

        <p>Email:</p> 

        <input type='text' name='admin_email' value=".$data['admin_email']." /> 

        <p>Password:</p> 

        <input type='text' name='admin_password' value=".$data['admin_password']." /> 


        <button type='submit' class='register-button'>Save</button> 

         

        </form> 

        </div>"; 

 

} 

 

?> 