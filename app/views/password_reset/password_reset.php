<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/verifystyle.css" type="text/css">
    <link rel="icon" href="images/logo.png">
    <title>Project Handelling and Evaluation MIS</title>
</head>
<body>
    <?php include 'includes/header.php';?>
    <?php include 'includes/guestNav.php';?>
    <div class="tag">
        <h2>Password Reset</h2>
    </div>
    <div class="container">
        <div class="formarea">
            <?php //echo $alert;?>
            <form method="POST">
                <div style="text-align:center">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter the password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain atleast one number,lowecase,uppercase and 8 or more charactors" onkeyup="checkPasswordPattern()" required>
                    <p id="pattern" class="warning"></p>
                </div>
                <div style="text-align:center;overflow:auto">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Re-enter the password" id="confirm_password" onkeyup="confirmPassword()" required>
                    <p id="confirm_warning" class="warning"></p>
                </div>
                <div style="text-align:center"><input type="submit" name="reset" value="Reset"></div>
                
            </form> 
        </div>
    </div>
    <script src="js/signup_validation.js"></script>
    <?php include 'includes/footer.php';?> 
</body>
</html>