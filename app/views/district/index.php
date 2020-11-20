<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>District - Home </title> <!--Change name here-->
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userHome.css">
    <link rel="icon" href="./images/logo.png">

</head>

<body>
    <?php require_once('includes/header.php');?>
    <?php //require_once('#');?>

    <!-- The buttons-->
     
        <div class="button-flex-container" >
                      
                        <div> <a href="#"> Notifications </a></div>
                        <div> <a href="#">View project proposals</a></div>
                        <div> <a href="#">Manage funds record</a></div>
                        <div> <a href="#">View monthly reports</a></div>
                        <div> <a href="#">Generate annual report</a></div>
        </div>     
    
    <!-- The buttons - END-->
    <?php require_once('includes/footer.php');?> 
</body>
</html>