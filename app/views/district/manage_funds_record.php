<?php
    require_once('includes/session.php');
    $agency_name=$this->agency_name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/manageFunds.css">
    <link rel="stylesheet" href="css/monthlyReportstyle.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/disNav.php');?>
    <div class="tag">
        <h2><?php echo $agency_name.' - ';?>Manage funds</h2>
    </div>
    <div class="container">
        <div class="button-container">
            <div class="overview">
                <div>
                    <div class="tag">
                        <h2>Funds Received</h2>
                    </div>
                    <div class="formarea clearfix">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div>
                                <label for="report_duration">Date Received</label>
                                <input type="date" name="date">
                            </div>
                            <div>
                                <label for="daily_expenses">Received Amount</label>
                                <input type="number" name="daily_expenses">
                            </div>
                            <div class="submit-cancel">
                                <input type="reset" value="Cancel" name="reset" onclick="window.location='dis_funding_agencies';">
                                <input type="submit" value="Submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="tag">
                        <h2>Allocate Funds</h2>
                    </div>
                    <div class="formarea clearfix">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div>
                                <label for="report_duration">Date</label>
                                <input type="date" name="date">
                            </div>
                            <div>
                                <label for="project_id">Project ID</label>
                                <select name="year" id="year" required>
                                    <option disabled selected value>Select</option>
                                    <option value="year">ProjectID001</option>
                                    <option value="year">ProjectID002</option>
                                    <option value="year">ProjectID003</option>   
                                </select>
                            </div>
                            <div>
                                <label for="daily_expenses">Allocated amount</label>
                                <input type="number" name="daily_expenses">
                            </div>
                            <div style="width:100%; text-align:center;">
                                <div style="display:inline-block">
                                    <input type="reset" value="Cancel" name="reset" onclick="window.location='dis_funding_agencies';">
                                    <input type="submit" value="Submit" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!--div class="check">
            <input type="submit" value="Update" name="submit">
            <input type="submit" value="Edit" name="submit">
        </div-->
        
 
    </div>
    <?php require_once('includes/footer.php');?> 
</body>
</html>