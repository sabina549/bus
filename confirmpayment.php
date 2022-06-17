<?php

    $connection=mysqli_connect("localhost","root","","vehicle_management");

    session_start();
    
    $msg="";
    $id=$_GET['id'];
    
    $query= "SELECT * FROM `tripcost` WHERE booking_id='$id'";
    $query1="UPDATE `tripcost` SET `id`='[value-1]',`booking_id`='[value-2]',`username`='[value-3]',
    `total_km`='[value-4]',`oil_cost`='[value-5]',`extra_cost`='[value-6]',`total_cost`='[value-7]',`paid`='[value-8]' 
    WHERE 1";
    //echo $query;
    $result= mysqli_query($connection,$query);
    $result1= mysqli_query($connection,$query1);
    $row= mysqli_fetch_assoc($result);

    //echo $row['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bill</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php include 'navbar_admin.php'; ?>
        <br><br>
        
        <div class="row">
           <div class="page-header">
            <h1 style="text-align: center;">Confirm Detail</h1>
            <?php echo $msg; ?>
           
           
      
          </div> 
            <div class="col-md-3"></div>
            <div class="col-md-6">
                  <p><strong>Booking Id: </strong><?php  echo isset($row['booking_id']); ?></p>    
                  <p><strong>Total Km: </strong><?php  echo isset( $row['total_km']); ?></p>    
                  <p><strong>Oil Cost: </strong><?php isset ($row['oil_cost']); ?></p>    
                  <p><strong>Extra Cost: </strong><?php isset ($row['extra_cost']); ?></p>    
                  <p><strong>Total Cost: </strong><?php isset( $row['total_cost']); ?></p>
                  
                <form action="confirmpaymentaction.php?id=<?php echo $row['booking_id']; ?>" method="post">
                    <button class="btn btn-success">Confirm Payment</button>
                </form> 
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>