<?php
    // require_once('includes/session.php');
    $agency_name=$this->agency_name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/disManageFunds.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/disNav.php');?>
    <div class="tag">
        <h2><?php echo $agency_name.' - ';?>Manage funds</h2>
    </div>
    <div class='container'>
        <center>
        
        <!--div class="check">
            <input type="submit" value="Update" name="submit">
            <input type="submit" value="Edit" name="submit">
        </div-->
        
        </center>  
    </div>
    <?php require_once('includes/footer.php');?> 
</body>
</html>