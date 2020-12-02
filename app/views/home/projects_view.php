<?php
    // require_once('includes/session.php');
?>
<!--?php
    $div_name=$this->div_name;
?-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="stylesheet" href="css/projectsStyle.css">
    <link rel="stylesheet" href="css/contentView.css">
    <?php include 'includes/cssLinks.php';?>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/guestNav.php');?>
    <div class="tag">
        <h2>Dummy Project Content</h2>
    </div>
    <div class="container">
        <div class = "album-title" id="title">
            <p id="des">Project descriptions provide the following details to the applicants: the problem the project will address, 
            a set of goals for the project, the overall objectives for the project, as well as a project plan that describes the 
            activities the members will undertake.</p>
        </div>
        <div class="image-gallery">
            <div class="column">
                <img src="public/images/progress.jpg" >
            </div>
            <div class="column">
                <img src="public/images/progress.jpg"  >
            </div>
            <div class="column">
                <img src="public/images/progress.jpg"  >
            </div>
            <div class="column">
                <img src="public/images/progress.jpg"  >
            </div>
            <div class="column">
                <img src="public/images/progress.jpg" >
            </div> 
            <div class="column">
                <img src="public/images/progress.jpg" >
            </div>  
            <div class="column">
                <img src="public/images/progress.jpg" >
            </div> 
            <div class="column">
                <img src="public/images/progress.jpg" >
            </div> 
            <div class="column">
                <img src="public/images/progress.jpg" >
            </div> 
            <div class="column">
                <img src="public/images/progress.jpg" >
            </div> 
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>


