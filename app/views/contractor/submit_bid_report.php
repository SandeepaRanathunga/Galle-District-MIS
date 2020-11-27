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
        <h2>Submit Bit Report</h2>
    </div>
    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="project_id">Project ID</label>
                    <input type="text" name="project_id">
                </div>
                <div>
                    <label for="project_name">Project Name</label>
                    <input type="text" name="project_name">
                </div>
                <div>
                    <label for="report">Add bid report</label>
                    <input type="file" name="report" id="" multiple="multiple" accept=".doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.pdf">
                </div>
                <div>

                    <input type="reset" value="Cancel" name="reset">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>