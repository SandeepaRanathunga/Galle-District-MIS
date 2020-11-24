<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userHome.css">
    <link rel="icon" href="./images/logo.png">
    <style>
        .notice{
            background:#434647;
            padding:10px;
            margin:5px;
        }
        .notice h3{
            color:white;
            font-size:17px;
        }
    </style>
</head>

<body>


<?php require_once('includes/header.php');?>
<?php require_once('includes/guestNav.php');?>
    <div class="tag">
        <h2>Projects</h2>
    </div>
    <div class="button-flex-container" >     
        <a href="ongoing_projects">
                <div><img src="svg/ongoing.svg" alt=""></div>
                <div>Ongoing Projects</div>
                
        </a>
        <a href="finished_projects">
            <div><img src="svg/finished.svg" alt=""></div>
            <div>Finished Projects</div>
        </a>
    </div>
    <!-- COPOIED CODE-->
    <?php require_once('includes/footer.php');?>
</body>
</html>