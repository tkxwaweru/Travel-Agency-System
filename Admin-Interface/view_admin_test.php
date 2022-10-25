
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
        <a class="active" href="">View Admin</a>
        <a href="view_agent_test.php">View Agent</a>
        <a href="view_client_test.php">View Client</a>
        <a class="log-out-button" href="admin-login.php">Log out</a>
      </div>
    </nav>
    
    <div class="filter">
    </div>

    <table>
        <th>
            <th>Admin ID</th>
            <th>Name</th>
            <th>Email</th>s
            <th>Update</th>
            <th>Delete</th>
        </th>

        <tbody>
                <?php
                    require_once("admindb.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["admin_id"] ?></td>
                    <td><?php echo $value["admin_name"] ?></td>
                    <td><?php echo $value["admin_email"] ?></td>

                    

                    <td><?php 

                    echo "<div class='wrapper'> 

                        <form action='editadmin.php' method='POST'> 

                        

                        <input type='hidden' name='admin_id' value=".$value['admin_id']." /> 

                    

                    

                        <button type='Submit' class='button'>Update </button> 

                        

                        </form> 

                        </div>"




                    ?></td>   
                    
                    <td><a href="deleteadmin.php"?delete="<?php $value["admin_id"] ?>"> <button type='Submit' class= 'button'>Delete</button></a></td>
                    
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
