<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home </title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userHome.css">
    <link rel="icon" href="./images/logo.png">
</head>

<body>


    <?php require_once('includes/header.php');?>
    <?php require_once('includes/adminNav.php');?>

        
    <div class="button-flex-container" >
        <a href="create_account">
            <div><img src="svg/adduser.svg" alt=""></div>
            <div>Create User Accounts</div>    
        </a>
        <a href="update_accounts">
            <div><img src="svg/updateuser.svg" alt=""></div>
            <div>Update User Accounts</div>
        </a>
        <a href="delete_accounts">
            <div><img src="svg/deleteuser.svg" alt=""></div>
            <div>Delete User Accounts</div>
        </a>
        <a href="update_about_us">
            <div><img src="svg/aboutus.svg" alt=""></div>
            <div>Update About Us</div>    
        </a>
    </div>     
        <?php require_once('includes/footer.php');?>
</body>
</html>