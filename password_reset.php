<?php
    $alert='';
    require 'includes/config.php';
    if(isset($_GET['token'])){
        $token=$_GET['token'];
        $ret_query="SELECT email FROM tokens WHERE token='$token'";
        $ret_result=mysqli_query($connection,$ret_query);
        if(mysqli_num_rows($ret_result)>0){
            $ret_array=mysqli_fetch_assoc($ret_result);
            $email=$ret_array['email'];
            if(isset($_POST['reset'])){
                $password=htmlspecialchars($_POST['password']);
                $confirm_password=htmlspecialchars($_POST['confirm_password']);
                if($password==$confirm_password){
                    $password_hash=password_hash($password,PASSWORD_DEFAULT);
                    $query="UPDATE user SET password='$password_hash' WHERE email='$email'";
                    $result=mysqli_query($connection,$query);
                    if(mysqli_affected_rows($connection)>0){
                        echo "<script>alert('Password reseted sucessfully! Please loging using the new password.');</script>";
                        echo "<script>window.location.href='login.php';</script>";
                    }
                    else
                        echo "<script>alert('Something went wrong! Please try again.');</script>";
                }
                else
                    $alert="<div class='error'>Passwords do not match!</div>";

            }
            
        }
        else
            $alert="<div class='error'>The link does not exist.Please try again with a new link!</div>";
    }
    else{
        header('Location: email_verify.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/verifystyle.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <link rel="icon" href="images/logo.png">
    <title>Project Handelling and Evaluation MIS</title>
</head>
<body>
    <?php include 'includes/Header.php';?>
    <?php include 'includes/guestNav.php';?>
    <div class="container">
        <div class="formarea">
            <?php echo $alert;?>
            <form method="POST">
                <div style="text-align:center">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter the password" required>
                </div>
                <div style="text-align:center;overflow:auto">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Re-enter the password" required>
                </div>
                <input type="submit" name="reset" value="Reset">
            </form> 
        </div>
    </div>
    <?php include 'includes/footer.php';?> 
</body>
</html>