
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/monthlyReportStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/guestNav.php');?>
    <div class="tag">
        <h2>Add Monthly Report</h2>
    </div>
    <div class="container">
        <div class="formarea clearfix">

            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="project_id">Project ID</label>
                    <input type="text" name="project_id">
                </div>
                <div>
                    <label for="report_no">Report No</label>
                    <input type="text" name="report_no">
                </div>
                <div>
                    <label for="report_duration">Report Duration</label>
                    <input type="date" name="start_date">
                    <label for="to" style="width:20px;text-align:center">to</label>
                    <input type="date" name="end_date">
                </div>
                <div>
                    <label for="documents">Attach Documents</label>
                    <input type="file" name="document" id="" multiple="multiple" accept=".doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.pdf">
                </div>
                <div>
                    <label for="photos">Attach Photos</label>
                    <input type="file" name="photo" id="" multiple="multiple" accept="image/*">
                </div>
                <div>
                    <label for="project_status">Project Status</label>
                    <input type="radio" name="status" id="ongoing" value="ongoing">
                    <label for="ongoing" style="width:70px;text-align:center">Ongoing</label>
                    <input type="radio" name="status" id="finished" value="finished">
                    <label for="finished" style="width:70px;text-align:center">Finished</label>
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