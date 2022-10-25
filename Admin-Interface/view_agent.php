<!DOCTYPE html>
<html>
    <head>
        <title>View Agent</title>
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
            <th>
                <th>Agent ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phonumber</th>
                <th>Email</th>    
                <th>Status</th>
                <th>Code</th>
                <th>Rating</th>
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
                    <td><?php echo $value["agent_fname"] ?></td>
                    <td><?php echo $value["agent_lname"] ?></td>
                    <td><?php echo $value["agent_phonenumber"] ?></td>
                    <td><?php echo $value["agent_email"] ?></td>
                    <td><?php echo $value["agent_status"] ?></td>
                    <td><?php echo $value["agent_code"] ?></td>
                    <td><?php echo $value["agent_rating"] ?></td>
                    

                    <td><?php 

                    echo "<div class='wrapper'> 

                        <form action='editagent.php' method='POST'> 

                        

                        <input type='hidden' name='agent_id' value=".$value['agent_id']." /> 

                    

                    

                        <button type='Submit' class='button'>Update </button> 

                        

                        </form> 

                        </div>"




                    ?></td>   
                    
                    <td><a href="deleteagent.php"?delete="<?php $value["agent_id"] ?>"> <button type='Submit' class= 'button'>Delete</button></a></td>
                    
                </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </body>
    
</html>
