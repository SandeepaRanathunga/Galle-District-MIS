<?php
    $div_name=$this->div_name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="stylesheet" href="css/projectsStyle.css">
    <link rel="stylesheet" href="css/projectsGallery.css">
    <?php include 'includes/cssLinks.php';?>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/guestNav.php');?>
    <div class="tag">
        <h2><?php echo $div_name.' - ';?>Finished Projects</h2>
    </div>
    <div class="break">
        <br><br><br>
    </div>
    <div>
        <div class="album">
            <a  href="projects_view">
                <div class ="photo_album" >
                    <img src="public/images/finished.jpg">    
                    <div>
                        <p id="h1">Finished Project 001</p>
                        <p>Starting from the basics, it is safe to say that all the 7 projects have been successful. During the last years of cooperation between the Programme and its projects, project partners kept the Programme informed about their activities, so that it is now easy to discover what they have built.</p>
                    </div>
                </div>
            </a>
            <a  href="projects_view">
                <div class ="photo_album" >
                    <img src="public/images/finished.jpg">    
                    <div>
                        <p id="h1">Finished Project 002</p>
                        <p>Starting from the basics, it is safe to say that all the 7 projects have been successful. During the last years of cooperation between the Programme and its projects, project partners kept the Programme informed about their activities, so that it is now easy to discover what they have built.</p>
                    </div>
                </div>
            </a>
            <a  href="projects_view">
                <div class ="photo_album" >
                    <img src="public/images/finished.jpg">    
                    <div>
                        <p id="h1">Finished Project 003</p>
                        <p>Starting from the basics, it is safe to say that all the 7 projects have been successful. During the last years of cooperation between the Programme and its projects, project partners kept the Programme informed about their activities, so that it is now easy to discover what they have built.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>