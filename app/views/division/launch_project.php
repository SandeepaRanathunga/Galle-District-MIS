
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
    <?php include_once('includes/guestNav.php');?>
    <div class="tag">
        <h2>Launch Project</h2>
    </div>
    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST">
                <div>
                    <label for="project_id">Project ID</label>
                    <input type="text" name="project_id">
                </div>
                <div>
                    <label for="project_id">Project Name</label>
                    <input type="text" name="project_name">
                </div>
                <div>
                    <label for="estimated_duration">Estimated Duration</label>
                    <input type="date" name="start_date">
                    <label for="to" style="width:20px;text-align:center">to</label>
                    <input type="date" name="end_date">
                </div>
                <div>
                    <label for="project_id">Contractor Name</label>
                    <input type="text" name="contractor_name">
                </div>
                <div>
                    <label for="grama_niladari">Grama Niladari Division</label>
                    <input type="text" name="grama_niladari">
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