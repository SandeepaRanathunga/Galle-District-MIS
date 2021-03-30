<?php
    require_once('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contractor - Home </title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userHome.css">
    <link rel="icon" href="./images/logo.png">
</head>

<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/contractorNav.php');?>
        <div class="button-flex-container" >              
            <!-- <a href="con_notifications">
                <div><img src="svg/notifications.svg" alt=""></div>
                <div>Notifications</div>    
            </a> -->
            <a href="submit_bid_report">
                <div><img src="svg/submitBid.svg" alt=""></div>
                <div>Submit Bid Report</div>
            </a>
            <a href="view_bid_callings">
                <div><img src="svg/viewBids.svg" alt=""></div>
                <div>View Bid Callings</div>
            </a>
            <a href="manage_expenses">
                <div><img src="svg/fundmanage.svg" alt=""></div>
                <div>Manage Expenses</div>
            </a>
            
        </div>     
    <?php require_once('includes/footer.php');?>
</body>
</html>