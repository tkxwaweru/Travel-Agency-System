<!DOCTYPE html>
<html>
    <head>
        <title>View Client</title>
        <link rel="stylesheet" type="text/css" href="Admin.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <?php
        include 'Admin_css.php';
        ?>

    </head>
    
    <body>
    <?php

         include 'Admin_sidebar.php';
          ?>

        <div class="wrapper">
        <div class="content">
            <h1>View Client</h1>
        </div>

        <table class="table"  width="100%">
            <thead style="border:solid 2px; border-color:black">
                <th>CLIENT ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Sex</th>    
                <th>Phonenumber</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
                
            </thead>

            <tbody>
                <?php
                    require_once("Clientdb.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["client_id"] ?></td>
                    <td><?php echo $value["client_fname"] ?></td>
                    <td><?php echo $value["client_lname"] ?></td>
                    <td><?php echo $value["age"] ?></td>
                    <td><?php echo $value["sex"] ?></td>
                    <td><?php echo $value["phone_number"] ?></td>
                    <td><?php echo $value["client_email"] ?></td>
                    <td><?php echo $value["password"] ?></td>
                    

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
    </body>
    
</html>
