<?php 

$hiddenagent_id = $_POST['hiddenagent_id']; 

$agent_id = $_POST['agent_id']; 

$agent_fname = $_POST['agent_fname']; 

$agent_lname = $_POST['agent_lname']; 

$agent_phonenumber = $_POST['agent_phonenumber']; 

$agent_email = $_POST['agent_email']; 

$agent_status = $_POST['agent_status']; 

$agent_code = $_POST['agent_code']; 

$agent_rating = $_POST['agent_rating']; 
 
 

require("../Processes/DBCONNECT.php"); 

$sql = "UPDATE  SET `agent_id`='$agent_id',`agent_fname`='$agent_fname',`agent_lname`='$client_lname', `agent_phonenumber` = '$agent_phonenumber', `agent_email` = '$agent_email',`agent_status`='$agent_status',`agent_code`='$agent_code',`agent_rating`='$agent_rating' WHERE agent_id = '$hiddenagent_id'"; 

$result = mysqli_query($conn, $sql); 


if($result = mysqli_query($conn, $sql)){ 

    echo "<p> Agent info updated Successfully.</p>"; 

             

                } 

 

?> 