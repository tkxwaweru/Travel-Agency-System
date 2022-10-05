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

        <center>
        <div class="wrapper">
        <div class="content">
            <h1>View Agent</h1>
        </div>

        <table class="table"  width="100%" style="border-collapse:collapse;>
            <thead style="border:solid 2px; border-color:black">
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>    
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </thead>

            <tbody>
                <?php
                    require_once("Userdb.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["client_id"] ?></td>
                    <td><?php echo $value["fname"] ?></td>
                    <td><?php echo $value["lname"] ?></td>
                    <td><?php echo $value["pnumber"] ?></td>
                    <td><?php echo $value["email"] ?></td>
                    <td><?php echo $value["password"] ?></td>
                    <td><a href="edit.php"?edit="<?php $value["client_id"] ?>">Edit</a></td>
                    <td><a href="delete.php"?edit="<?php $value["client_id"] ?>">Delete</a></td>
                </tr>
                <?php }
                ?>
            </tbody>
        </table>
        </center>
    </body>
    
</html>
