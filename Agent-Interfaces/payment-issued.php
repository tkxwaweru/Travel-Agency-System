<?php 

$paymentID = $_POST['payment_id'];
 
 

require("../Processes/DBCONNECT.php");

$sql = "SELECT * FROM mpesa_payments where payment_id='$paymentID'"; 

$result = mysqli_query($conn, $sql); 

 
 

        if (mysqli_num_rows($result) === 1) { 

            $data = mysqli_fetch_assoc($result); 

            echo 
            
        "<div class='wrapper'> 

        <form action='payment-issued-process.php' method='POST'> 


        <p>Payment ID:</p> 

        <input type='text' name='payment_id' value=".$data['payment_id']." readonly/> 

        <p>Client Code:</p> 

        <input type='text' name='client_code' value=".$data['client_code']." readonly/> 

        <p>CONFIRMATION CODE:</p> 

        <input type='text' name='confirmation_code' value=".$data['confirmation_code']." readonly/> 

        <p>PAYMENT DATE:</p> 

        <input type='text' name='payment_date' value=".$data['payment_date']." readonly/> 

        <p>ISSUED:</p> 

        <input type='text' name='issued' value=".$data['issued']." /> 


        <button type='submit' class='register-button'>Save</button> 

        </form> 

        </div>"; 

 

} 

?> 