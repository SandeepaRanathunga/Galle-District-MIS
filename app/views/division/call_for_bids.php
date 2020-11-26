<?php
    // require_once('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/monthlyReportstyle.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/divNav.php');?>
    <div class="tag">
        <h2>Call for bids</h2>
    </div>
    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST">
                <div>
                    <label for="project_name">Project name</label>
                    <input type="text" name="project_name">
                </div>
                <div>
                    <label for="project_des">Project description</label>
                    <input type="text" name="project_des">
                </div>
                <div>
                    <label for="bid_report">Attach bid report</label>
                    <input type="file" name="bid_report" id="">
                </div>
                <div>
                    <input type="button" value="Cancel">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>