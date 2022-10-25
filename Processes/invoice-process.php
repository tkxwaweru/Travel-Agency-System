<?php

    require('DBCONNECT.php');

    $client_code = $_POST['client-code'];
    $agent_code = $_POST['agent-code'];
    $flight_total = $_POST['flight-total'];
    $accomodation_total = $_POST['accomodation-total'];
    $transport_total = $_POST['transport-total'];
    $service_total = $flight_total + $accomodation_total + $transport_total;
    $service_charge = $service_total * 0.1;
    $subtotal = $service_total + $service_charge;
    //$subtotal = $_POST['subtotal'];

    $sql = "INSERT INTO invoices(client_code, flight_total, accomodation_total, transportation_total, service_total, service_charge, subtotal)
            VALUES('$client_code', '$flight_total', '$accomodation_total', '$transport_total', '$service_total', '$service_charge', '$subtotal')";


    if (mysqli_query($conn,$sql)) {

    header("location: ../Agent-Interfaces/invoice.php");
   
   }else{echo "Error: Record not added".mysqli_error($conn);}





?>