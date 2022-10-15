<!DOCTYPE html>
<html>
    <head>
        <title>View Booking history</title>
        <link rel="stylesheet" type="text/css" href="Admin.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="form.css">

        <?php
        include 'client-dashboard-home_css.php';
        ?>

    </head>
    
    <body>
    <?php

         include 'client-dashboard-home.php';
          ?>

        <div class="filter">
        </div>

        <table>
            <th>
                <th>Booking ID</th>
                <th>Booking Date</th>
                <th>Client ID</th>
                <th>Agent ID</th>
                <th>City From</th>    
                <th>Destination</th>
                <th>Depart Date</th>
                <th>Return Date</th>
                <th>income</th>
                <th>View</th>
                
            </th>

            <tbody>
                <?php
                    require_once("booking-historydb.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["booking_id"] ?></td>
                    <td><?php echo $value["booking_date"] ?></td>
                    <td><?php echo $value["client_id"] ?></td>
                    <td><?php echo $value["agent_id"] ?></td>
                    <td><?php echo $value["city_from"] ?></td>
                    <td><?php echo $value["destination"] ?></td>
                    <td><?php echo $value["depart_date"] ?></td>
                    <td><?php echo $value["return_date"] ?></td>
                    <td><?php echo $value["income"] ?></td>
                    
                    <td><?php 

                            echo "<div class='wrapper'> 

                                <form action='' method='POST'> 

                                

                                <input type='hidden' name='client_id' value=".$value['client_id']." /> 





                                <button type='Submit' class='button'>View </button> 

                                

                                </form> 

                                </div>"




                    ?></td> 
                    
                </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </body>
    
</html>
