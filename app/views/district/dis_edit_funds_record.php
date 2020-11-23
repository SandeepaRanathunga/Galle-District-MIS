
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
    <div class='container'>
        <form name="formEdit" method="post" action="" id="formEdit">
        <div>            
            <label for="agency_name">Agency Name</label>
            <input type="text" name="agency_name" id="agency_name" required value="<?php echo $result[0]["agency_name"]; ?>">
        </div>   
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>