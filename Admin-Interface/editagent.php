<?php 

$agent_id = $_POST['agent_id']; 

 
 

require("../Processes/DBCONNECT.php"); 

$sql = "SELECT * FROM agents where agent_id='$agent_id'"; 

$result = mysqli_query($conn, $sql); 

 
 

        if (mysqli_num_rows($result) === 1) { 

            $data = mysqli_fetch_assoc($result); 

            echo "<div class='wrapper'> 

        <form action='editagentprocess.php' method='POST'> 

        <input type='hidden' name='hiddenagent_id' value=".$agent_id." /> 

        <p>agent_id:</p> 

        <input type='text' name='agent_id' value=".$data['agent_id']." /> 
        
        <p>Code:</p> 

        <input type='text' name='agent_code' value=".$data['agent_code']." /> 

        <p>First Name:</p> 

        <input type='text' name='agent_fname' value=".$data['agent_fname']." /> 

        <p>Last Name:</p> 

        <input type='text' name='agent_lname' value=".$data['agent_lname']." /> 

        <p>Phonenumber:</p> 

        <input type='text' name='agent_phonenumber' value=".$data['agent_phonenumber']." /> 

        <p>Email:</p> 

        <input type='text' name='agent_email' value=".$data['agent_email']." /> 


        <button type='submit' class='register-button'>Save</button> 

         

        </form> 

        </div>"; 

 

} 

 

?> 