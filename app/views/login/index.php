<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/loginstyle.css" type="text/css">
    <link rel="icon" href="images/logo.png">
    <title>Project Handelling and Evaluation MIS</title>
    
</head>
<body>
    <?php include 'includes/header.php';?>
    <?php include 'includes/guestNav.php';?>
    <div class="container">
        <div>
            <div class="loginBox">
                <div class="icon">
                    <img src="svg/user.svg" alt="">
                </div>
                <h2>Welcome</h2>
                    <!-- <?php echo $alert;?> -->
                <form action="" method="post">
                    <div>
                        <label for="userID"><i class="fa fa-user"></i></label>
                        <input type="text" name="userID" placeholder="Enter the user ID" required>
                    </div>
                    <div>
                        <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i></label>
                        <input type="password" name="password" placeholder="Enter the password" required>
                    </div>
                    <div>
                        <input type="submit" name="login" value="Login">
                    </div>
                    <div class="forgotLink"><a href="email_verify">Forgot your password?</a></div>
                </form>
            </div>
        </div>
        <!-- <div class="mask">
            <img src="images/mask.png" alt="This is a mask" class="mask">
        </div> -->
    </div>
    <?php include 'includes/footer.php';?>
</body>
</html>