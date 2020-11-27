<?php
    // require_once('includes/session.php');
?>
<?php
    $div_id=$this->div_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="stylesheet" href="css/projectsStyle.css">
    <?php include 'includes/cssLinks.php';?>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/guestNav.php');?>
    <div class="tag">
        <h2><?php echo $div_id.' - ';?>Ongoing Projects Timeline</h2>
    </div>
    <div class="container">

    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>