<?php
    // require_once('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handeling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userPage.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/disNav.php');?>
    <div class="tag">
        <h2>Monthly Reports</h2>
    </div>
    <div class="container">
        <div class="combutton">
            <div class="flex-container" >
                <div style="width:75%"><h2 style="font-size:17px"><br>Monthly report 001</h2></div>
                <div style="width:15%"><button>View</button></div>

            </div>
            <div class="flex-container" >
                <div style="width:75%"><h2 style="font-size:17px"><br>Monthly report 002</h2></div>
                <div style="width:15%"><button>View</button></div>

            </div>
            <div class="flex-container" >
                <div style="width:75%"><h2 style="font-size:17px"><br>Monthly report 003</h2></div>
                <div style="width:15%"><button>View</button></div>

            </div>        
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>