<!DOCTYPE html>
<html>
    <head>
        <title>View Admin</title>
        <link rel="stylesheet" type="text/css" href="Admin.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <link rel="stylesheet" href="form.css">

        <?php
        include 'Admin_css.php';
        ?>

    </head>
    
    <body>
    <?php

         include 'Admin_sidebar.php';
          ?>

        <center>
        <div class="filter">
        </div>

        <table>
            <tr>
                <th>Admin ID</th>
                <th>Name</th>
                <th>Email</th>    
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>

            <tbody>
                <?php
                    require_once("admindb.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["admin_id"] ?></td>
                    <td><?php echo $value["admin_name"] ?></td>
                    <td><?php echo $value["admin_email"] ?></td>
                    <td><?php echo $value["admin_password"] ?></td>
                    

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
    </body>
    
</html>
