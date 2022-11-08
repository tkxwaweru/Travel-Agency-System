<?php 

$bookingreqID = $_POST['booking_request_id'];
 
 

require("../Processes/DBCONNECT.php");

$sql = "SELECT * FROM booking_requests where booking_request_id='$bookingreqID'"; 

$result = mysqli_query($conn, $sql); 

 
 

        if (mysqli_num_rows($result) === 1) { 

            $data = mysqli_fetch_assoc($result); 

            echo 
            
        "<div class='wrapper'> 

        <form action='ishandled-process.php' method='POST'> 

        <input type='hidden' name='is_handled' value=".$bookingreqID." /> 

        <p>BOOKING REQUEST ID:</p> 

        <input type='text' name='booking_request_id' value=".$data['booking_request_id']." readonly/> 

        <p>Client Code:</p> 

        <input type='text' name='client_code' value=".$data['client_code']." readonly/> 

        <p>AGENT CODE:</p> 

        <input type='text' name='agent_code' value=".$data['agent_code']." readonly/> 

        <p>Is Handled:</p> 

        <input type='text' name='is_handled' value=".$data['is_handled']." /> 


        <button type='submit' class='register-button'>Save</button> 

        </form> 

        </div>"; 

 

} 

?> 