
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/divFormsStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include_once('includes/divHeader.php');?>
    <!--?php include_once('includes/guestNav.php');?-->
    <div class="tag">
        <h2>Launch project</h2>
    </div>
    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST">
                <div>
                    <label for="project_id">Project ID</label>
                    <input type="text" name="project_id">
                </div>
                <div>
                    <label for="project_name">Project name</label>
                    <input type="text" name="project_name">
                </div>
                <div>
                    <label for="report_duration">Estimated Duration</label>
                    <input type="date" name="start_date">
                    <label for="to" style="width:20px;text-align:center">to</label>
                    <input type="date" name="end_date">
                </div>
                <div>
                    <label for="contractor_name">Contractor name</label>
                    <input type="text" name="project_name">
                </div>
                <div>
                    <label for="gn_division">Grama Niladhari division</label>
                    <input type="text" name="gn_division">
                </div>
                <div>
                    <input type="button" value="Cancel">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <!--?php require_once('includes/footer.php');?-->
</body>
</html>