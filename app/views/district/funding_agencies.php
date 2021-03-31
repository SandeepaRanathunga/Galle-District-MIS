<?php
    require_once('includes/session.php');
    $agencies=$this->agencies;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="stylesheet" href="css/fundingAgencies.css">
    <?php include 'includes/cssLinks.php';?>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/disNav.php');?>
    <div class="tag">
        <h2>Funding Agencies</h2>
    </div>
    <div class="container">
        <div class="links-container">
            <?php
            foreach($agencies as $agency):
            ?>
            <a href="dis_manage_funds?agency_id=<?php echo $agency[0]?>"><?php echo $agency[1]?></a>
            <?php
                endforeach;
            ?>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>