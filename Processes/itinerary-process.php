<?php

    require('DBCONNECT.php');

    $client_code = $_POST['client_code'];
    $e_ticket = $_POST['e_ticket'];
    $acc_voucher = $_POST['accomodation_voucher'];
    $transport_voucher = $_POST['transport_voucher'];
    $agent_code = $_POST['agent_code'];

    $sql = "INSERT INTO itineraries(client_code, e_ticket, accomodation_voucher, transport_voucher, agent_code)
            VALUES('$client_code', '$e_ticket', '$acc_voucher', '$transport_voucher', '$agent_code')";


    if (mysqli_query($conn,$sql)) {

    header("location: ../Agent-Interfaces/itinerary-popup.php");
   
   }else{echo "Error: Record not added".mysqli_error($conn);}





?>