
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
        <h4>Welcome Admin</h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="Admin_test.php">Home</a>
        <a href="add_admin_test.php">Add Admin</a>
        <a href="add_client_test.php">Add client</a>
        <a href="view_admin_test.php">View Admin</a>
        <a href="view_client_test.php">View client</a>
        <a class="active" href="#">View Client</a>
        <a class="log-out-button" href="admin-login.php">Log out</a>
      </div>
    </nav>
    
    <div class="filter">
    </div>

    <table>
        <th>
            <th>Client ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Sex</th> 
            <th>National ID</th>    
            <th>Phone Number</th>
            <th>Email</th>
            <th>Password</th>
            <th>Code</th>
            <th>Update</th>
            <th>Delete</th>
        </th>

        <tbody>
                <?php
                    require_once("clientdb.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["client_id"] ?></td>
                    <td><?php echo $value["client_fname"] ?></td>
                    <td><?php echo $value["client_lname"] ?></td>
                    <td><?php echo $value["age"] ?></td>
                    <td><?php echo $value["sex"] ?></td>
                    <td><?php echo $value["national_id"] ?></td>
                    <td><?php echo $value["phone_number"] ?></td>
                    <td><?php echo $value["client_email"] ?></td>
                    <td><?php echo $value["client_code"] ?></td>

                    <td><?php 

                    echo "<div class='wrapper'> 

                        <form action='editclient.php' method='POST'> 

                        

                        <input type='hidden' name='client_id' value=".$value['client_id']." /> 

                    

                    

                        <button type='Submit' class='button'>Update </button> 

                        

                        </form> 

                        </div>"




                    ?></td>   
                    
                    <td><a href="deleteclient.php"?delete="<?php $value["client_id"] ?>"> <button type='Submit' class= 'button'>Delete</button></a></td>
                    
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
