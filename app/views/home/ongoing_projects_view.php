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
        <h2><?php echo $div_name.' - ';?>Ongoing Projects Timeline</h2>
        <h6>This flow of progress of ongoing projects of <?php echo $div_name." ";?>division </h6>
    </div>
    <div class="break">
        <br><br><br>
    </div>
    <div>
        <div class="album">
            <a  href="projects_view">
                <div class ="photo_album" >
                <img src="public/images/ongoing.jpg">    
                    <div>
                        <p id="h1">Ongoing Project 001</p>    
                        <p>Ongoing Project means a project where development is going on at site and for which completion certificate has not been issued but excludes such projects which fulfill any of the following criteria, before the stipulated date of due registration under Section 3 (1) of the Act, namely.</p>
                    </div>
                </div>
            </a>
            <a  href="projects_view">
                <div class ="photo_album" >
                <img src="public/images/ongoing.jpg">    
                    <div>
                        <p id="h1">Ongoing Project 002</p>
                        <p>Ongoing Project means a project where development is going on at site and for which completion certificate has not been issued but excludes such projects which fulfill any of the following criteria, before the stipulated date of due registration under Section 3 (1) of the Act, namely.</p>
                    </div>
                </div>
            </a>
            <a  href="projects_view">
                <div class ="photo_album" >
                <img src="public/images/ongoing.jpg">    
                    <div>
                        <p id="h1">Ongoing Project 003</p>
                        <p>Ongoing Project means a project where development is going on at site and for which completion certificate has not been issued but excludes such projects which fulfill any of the following criteria, before the stipulated date of due registration under Section 3 (1) of the Act, namely.</p>
                    </div>
                </div>
            </a>
        </div> 
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>