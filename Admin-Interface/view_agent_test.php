
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.view.agent</title>
  <link rel="stylesheet" href="view_agent_test.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <img src="Logo.png" alt="" width="80px" height="60px">
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
        <a href="add_admin_test.php">Add Admin</a>
        <a href="add_agent_test.php">Add Agent</a>
        <a href="view_admin_test.php">View Admin</a>
        <a class="active" href="#">View Agent</a>
        <a href="view_client_test.php">View Client</a>
        <a class="log-out-button" href="admin-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
    <div class="filter">
        </div>
        <table>
            <th>
                <th>Agent ID</th>
                <th>Code</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>    
                <th>Update</th>
                <th>Delete</th>
            </th>

            <tbody>
                <?php
                    require_once("agentdb.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["agent_id"] ?></td>
                    <td><?php echo $value["agent_code"] ?></td>
                    <td><?php echo $value["agent_fname"] ?></td>
                    <td><?php echo $value["agent_lname"] ?></td>
                    <td><?php echo $value["agent_phonenumber"] ?></td>
                    <td><?php echo $value["agent_email"] ?></td>

                    

                    <td><?php 

                    echo "<div class='wrapper'> 

                        <form action='editagent.php' method='POST'> 

                        

                        <input type='hidden' name='agent_id' value=".$value['agent_id']." /> 

                    

                    

                        <button type='Submit' class='button'>Update </button> 

                        

                        </form> 

                        </div>"




                    ?></td>   
                    
                    <td><a href="deleteagent.php"?delete="<?php $value["agent_id"] ?>"> <input type='checkbox' > </a></td>
                    
                </tr>
                <?php }
                ?>
            </tbody>
            
        </table>
    </div>
    </div>
  </div>
</body>
</html>
