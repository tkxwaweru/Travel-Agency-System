
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.home</title>
  <link rel="stylesheet" href="view_client_test.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
      <h4><?php  include("../Processes/admin-login-process.php"); ?><?php  echo $_SESSION['admin_email']; ?></h4>
      </div>
    </div>
  </header>

  <div class="container">

    <nav>
      <div class="side_navbar">
        <a href="Admin_test.php">Home</a>
        <a href="add_agent_test.php">Add Agent</a>
        <a href="view_agent_test.php">View Agent</a>
        <a href="new_clients.php">View New Clients</a>
        <a class="active" href="#">View Client</a>
        <a class="log-out-button" href="admin-login.php">Log out</a>
      </div>
    </nav>
    
    <div class="main-body">
      <table>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Age</th>
              <th>Sex</th> 
              <th>National ID</th>    
              <th>Phone Number</th>
              <th>Email</th>
              <th>Code</th>
              <th>Agent Assigned</th>
              <th>Agent Code</th>
          

          <tbody>
                  <?php

                      require('../Processes/DBCONNECT.php');
                                          
                      $sqli="SELECT * FROM clients WHERE agent_assigned = '1' ";

                      $result = mysqli_query($conn, $sqli);
                      $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      foreach($test as $key => $value){
   
                  ?>
                  <tr>
                      <td><?php echo $value["client_fname"] ?></td>
                      <td><?php echo $value["client_lname"] ?></td>
                      <td><?php echo $value["age"] ?></td>
                      <td><?php echo $value["sex"] ?></td>
                      <td><?php echo $value["national_id"] ?></td>
                      <td><?php echo $value["phone_number"] ?></td>
                      <td><?php echo $value["client_email"] ?></td>
                      <td><?php echo $value["client_code"] ?></td>
                      <td><?php echo $value["agent_assigned"] ?></td>
                      <td><?php echo $value["agent_code"] ?></td>

                    
                      
                  </tr>
                  <?php }
                  ?>
              </tbody>
      </table>
    </div>

  </div>

</body>
</html>
