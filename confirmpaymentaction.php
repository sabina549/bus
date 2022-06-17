<?php
    $connection= mysqli_connect('localhost','root','','vehicle_management');
    session_start();

    $booking_id= $_GET['id'];

    $sql="UPDATE `tripcost` SET `id`='[value-1]',`booking_id`='[value-2]',`username`='[value-3]',
    `total_km`='[value-4]',`oil_cost`='[value-5]',`extra_cost`='[value-6]',`total_cost`='[value-7]',`paid`='[value-8]' 
    WHERE 1";
    $result= mysqli_query($connection,$sql);

    if($result){
        header ('Location: bookinglist.php');
    }

    echo  "Confirm Payment"
?>