<?php 

$client_id = $_POST['client_id']; 

 
 

require("../Processes/DBCONNECT.php"); 

$sql = "SELECT * FROM clients where client_id='$client_id'"; 

$result = mysqli_query($conn, $sql); 

 
 

        if (mysqli_num_rows($result) === 1) { 

            $data = mysqli_fetch_assoc($result); 

            echo "<div class='wrapper'> 

        <form action='editclientprocess.php' method='POST'> 

        <input type='hidden' name='hiddenclient_id' value=".$client_id." /> 

        <p>client_id:</p> 

        <input type='text' name='client_id' value=".$data['client_id']." /> 

        <p>First Name:</p> 

        <input type='text' name='client_fname' value=".$data['client_fname']." /> 

        <p>Last Name:</p> 

        <input type='text' name='client_lname' value=".$data['client_lname']." /> 

        <p>Age:</p> 

        <input type='text' name='age' value=".$data['age']." /> 

        <p>Sex:</p> 

        <input type='text' name='sex' value=".$data['sex']." /> 

        <p>Phone Number:</p> 

        <input type='text' name='phone_number' value=".$data['phone_number']." /> 

        <p>Email:</p> 

        <input type='text' name='client_email' value=".$data['client_email']." /> 

        <button type='submit' class='register-button'>Save</button> 

         

        </form> 

        </div>"; 

 

} 

 /*<p>Password:</p> 

 <input type='text' name='password' value=".$data['password']." /> */

?> 