<?php
    //VIEW
    
    // require_once('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/aboutUs.css">

</head>
<body>
    <?php include 'includes/header.php';?>
    <?php include 'includes/adminNav.php';?>
    <div class="tag">
        <h2>Update About Us</h2>
    </div>
    <div class="container">   
        <div class="button-container">
            <div class="formarea">
                <form action="" method="post">
                    <div class="label-text">
                            <textarea id="updateaboutus" name="updateaboutus" rows="15" cols="190">
                            </textarea>
                    </div>
                        
                    <div class="update-cancel">
                    <div class="button">
                        <input type="submit" name="update" value="Update">
                    </div>   
                    <div class="button"> 
                        <input type="submit" name="cancel" value="Cancel" onclick="window.location='admin_home';">
                    </div>
                    </div>
                </form>
            </div>

            <!-- Naushika's Code -->
            <!-- Naushika's Code -->
            <!-- Naushika's Code -->
            <?php foreach ($data as $name): ?>
            <h1><?=$name?></h1>
            <?php endforeach ?>
            <!-- Naushika's Code -->
            <!-- Naushika's Code -->
            <!-- Naushika's Code -->


        <?php include 'includes/footer.php';?>
        
        </div>
    </div>
</body>
</html>