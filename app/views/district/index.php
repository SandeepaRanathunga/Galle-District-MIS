<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>District - Home </title> <!--Change name here-->
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userHome.css">
    <link rel="icon" href="./images/logo.png">

</head>

<body>
    <?php require_once('includes/header.php');?>
    <?php //require_once('#');?>   
        <div class="button-flex-container" >
            <a href="#">
                <div><img src="svg/notifications.svg" alt=""></div>
                <div>Notifications</div>    
            </a>
            <a href="#">
                <div><img src="svg/viewProposal.svg" alt=""></div>
                <div>View Project Proposals</div>
            </a>
            <a href="#">
                <div><img src="svg/viewReport.svg" alt=""></div>
                <div>View Monthly Reports</div>
            </a>
            <a href="#">
                <div><img src="svg/annualReport.svg" alt=""></div>
                <div>Generate Annual Report</div>    
            </a>
            <a href="#">
                <div><img src="svg/fundmanage.svg" alt=""></div>
                <div>Manage Funds Records</div>
            </a>
            
        </div>     
    
    <!-- The buttons - END-->
    <?php require_once('includes/footer.php');?> 
</body>
</html>