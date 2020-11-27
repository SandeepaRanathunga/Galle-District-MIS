<?php
    // require_once('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division - Home </title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userHome.css">
    <link rel="stylesheet" href="css/divHome.css">

    <link rel="icon" href="./svg/logo.png">
</head>

<body class="clearfix">
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/divNav.php');?>
    <div class="button-flex-container" >                  
        <a href="div_notifications">
            <div><img src="svg/notifications.svg" alt=""></div>
            <div>Notifications</div>
            
        </a>
        <a href="respond_contractors">
            <div><img src="svg/respond.svg" alt=""></div>
            <div>Contractor Requests</div>
        </a>
        <a href="#">
            <div><img src="svg/proposal.svg" alt=""></div>
            <div>Add Project Proposal</div>
        </a>
        <a href="launch_project">
            <div><img src="svg/launch.svg" alt=""></div>
            <div>Launch Project</div>
        </a>
        <a href="add_monthly_report">
            <div><img src="svg/report.svg" alt=""></div>
            <div>Add Monthly Report</div>    
        </a>
        <a href="call_for_bids">
            <div><img src="svg/bidding.svg" alt=""></div>
            <div>Call For Bids</div>
        </a>
        <a href="#">
            <div><img src="svg/auction.svg" alt=""></div>
            <div>View Bid Reports</div>
        </a>
        
    </div>     
    <?php require_once('includes/footer.php');?>
</body>
</html>