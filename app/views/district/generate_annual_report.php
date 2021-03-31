<?php
    require_once('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <!-- <link rel="stylesheet" href="css/tableStyles.css"> -->
    <link rel="stylesheet" href="css/annualReport.css">
    <link rel="icon" href="images/logo.png">
    <style>
        p{
            margin-left: 10px;
            font-weight:   bold;
        }
    </style>
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/disNav.php');?>
    <div class="tag">
        <h2>Generate annual report</h2>
    </div>
    <div class='container'>
        <p>Annual reports are formal financial statements that are published yearly and sent to company stockholders 
        and various other interested parties. The reports assess the year's operations and discuss the companies' 
        view of the upcoming year and the companies' place and prospects. Both for-profit and not-for-profit organizations 
        produce annual reports.</p>
        <div class="formarea">
            <form action="" method="POST" id="newYear" onsubmit="">
                <div>
                    <label for="year">Year</label>
                    <select name="year" id="year" required>
                        <option disabled selected value>Select</option>
                        <option value="year">2018</option>
                        <option value="year">2019</option>
                        <option value="year">2020</option>   
                    </select>
                </div>
                <div> 
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" id="user_id" minlength="7" maxlength="7" required>
                </div>
                <div class="clearfix" style="font-weight:bold; float:left">
                    <input type="reset" value="Cancel" onclick="window.location='dis_home'";>
                    <input type="submit" value="Generate" name="submit" id="submit">
                </div>
            </form>
        </div>    
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>