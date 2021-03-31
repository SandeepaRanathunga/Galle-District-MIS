<?php
    // require_once('includes/session.php');
?>
<?php
    $divisions=$this->divisions;
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
        <h2>Ongoing Projects</h2>
        <h6>Click on any division to view ongoing projects</h6>
    </div>
    <div class="container">
        <div class="links-container">
            <?php
            foreach($divisions as $division):
            ?>
            <a href="ongoing_projects_view?div_id=<?php echo $division[0]?>"><?php echo $division[1]?></a>
            <?php
                endforeach;
            ?>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>