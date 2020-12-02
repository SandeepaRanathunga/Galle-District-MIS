
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
        <h2>Add Project Proposal</h2>
    </div>
    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-field">
                    <label for="description">Proposal Description</label>
                    <textarea name="description" id="" cols="40" rows="5" placeholder="Enter a brief descrioption about the project"></textarea>
                </div>
                <div>
                    <label for="file">Attach Document</label>
                    <input type="file" name="file" id="file">
                </div>
                <div>
                    <input type="reset" name="cancel">
                    <input type="submit" name="submit" value="Submit">

                </div>
                <center>
                    <div class="formbuttons">
                        <input type="reset" value="Cancel" name="reset" onclick="window.location='div_home';">
                        <input type="submit" value="Submit" name="submit">
                    </div>
                </center>
            </form>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>