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
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/divNav.php');?>
    <div class="tag">
        <h2>Add Expenses</h2>
    </div>
    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="report_duration">Date</label>
                    <input type="date" name="date">
                </div>
                <div>
                    <label for="project_id">Project ID</label>
                    <input type="text" name="project_id">
                </div>
                <div>
                    <label for="daily_expenses">Daily Expenses</label>
                    <input type="number" name="daily_expenses">
                </div>
                <div>
                    <input type="reset" value="Cancel" name="reset" onclick="window.location='manage_expenses';">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>