<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contractors</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userHome.css">
    <link rel="icon" href="./images/logo.png">
    <style>
        .notice{
            background: #393c3d;
            padding:10px;
            margin:5px;
        }
        .notice h3{
            color:white;
            font-size:17px;
            font-weight: normal ;
            color: #D2691E;
        }
    </style>
</head>

<body>


<?php require_once('includes/header.php');?>
<?php require_once('includes/guestNav.php');?>

    <div class="notice">
        <marquee behavior="" direction="left" scrollamount="10">
            <h3><span style="font-size:17px;">
                ALERT! </span>Contractor registrations for the year 2020/21 are now open! Please register via the MIS
            </h3></marquee><h3></h3>
    </div>
    <div class="tag">
        <h2>Contractors</h2>
    </div>
    <div class="button-flex-container" >     
        <a href="contractor_register">
                <div><img src="svg/registration.svg" alt=""></div>
                <div>Contractor Registration</div>
                
        </a>
        <a href="home_view_bid_callings">
            <div><img src="svg/viewBids.svg" alt=""></div>
            <div>View Bid Callings</div>
        </a>
    </div>
    <!-- COPIED CODE-->
    <?php require_once('includes/footer.php');?>
</body>
</html>