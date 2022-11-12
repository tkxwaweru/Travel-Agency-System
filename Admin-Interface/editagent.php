<html>
    <head>
    <link rel="stylesheet" href="editagent_css.css" />
    </head>
    <body>
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

      <b>  <p>Agent id:</p> </b>

        <input type='text' name='agent_id' value=".$data['agent_id']." readonly/>
        
       <b> <p>Code:</p> </b>

        <input type='text' name='agent_code' value=".$data['agent_code']." /> <br>

       <b> <p>First Name:</p> </b>

        <input type='text' name='agent_fname' value=".$data['agent_fname']." /> <br>

       <b> <p>Last Name:</p> </b>

        <input type='text' name='agent_lname' value=".$data['agent_lname']." /> <br>

       <b> <p>Phonenumber:</p> </b>

        <input type='text' name='agent_phonenumber' value=".$data['agent_phonenumber']." /> <br>

       <b> <p>Email:</p> </b>

        <input type='text' name='agent_email' value=".$data['agent_email']." /> <br> <br>


       
        <input type='submit' value='Save' class='btn' style=' border-radius: 30px; color: white; background-color: black;'>
         

        </form> 

        </div>"; 

 

} 

 

?> 
</body>

</html>