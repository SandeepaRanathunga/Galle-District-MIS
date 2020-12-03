<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/annualReport.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/guestNav.php');?>
    <div class="tag">
        <h2>Annual Reports</h2>
    </div>
    <div class="container">
        <div class="report-intro">
            <p>In here you can download the annual report for a particular year by clicking on the links given below. The report contains of 
            how funds have been allocated and how they were managed to the projects carried out during the year.</p>
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
                <div class="clearfix" style="font-weight:bold; float:left">
                    <input type="reset" value="Cancel" onclick="window.location='/Galle-District-mis/'";>
                    <input type="submit" value="Download" name="submit" id="submit">
                </div>
            </form>
        </div>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>