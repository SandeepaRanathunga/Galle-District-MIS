<?php
    require 'includes/config.php';
    $alert="";
    if(isset($_POST['send'])){
        $email=$_POST['email'];
        $query="SELECT email FROM user WHERE email='$email'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
            $token=uniqid(md5(time()));
            $ret_query="SELECT email FROM tokens WHERE email='$email'";
            if(mysqli_num_rows(mysqli_query($connection,$ret_query))==0){
                $query="INSERT INTO tokens (email,token) VALUES ('$email','$token')";
                $insert_result=mysqli_query($connection,$query);
            }
            else{
                $query="UPDATE tokens SET token='$token' WHERE email='$email'";
                $update_result=mysqli_query($connection,$query);
            }
            
            //send token to the email
            $to=$email;
            $from='sandeepaucsc@gmail.com';
            $subject="Password reset token";
            $message='We have got your request to reset your password.<br>';
            $message.='Please follow the url and reset your password.The link will only be valid for one time use only.<br>';
            $message.='http://localhost/Galle-District-MIS/password_reset.php?token='.$token;
            $header="From: {$from}\r\nContent-Type: text/html;";

            $send_result=mail($to,$subject,$message,$header);
            if($send_result)
                $alert="<div class='sent'>Password request link sent to your email.<br>Please follow the link.</div>";
            else
                $alert="<div class='error'>Failed to send the mail!</div>";
        }
        else 
        $alert="<div class='error'>The entered email is not a registerd email address ! Please try with a valid email address.</div>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/verifystyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include 'includes/header.php';?>
    <?php include 'includes/guestNav.php';?>
    <div class="container">
        <div class="formarea">
            <p class="message">Enter your registered email address so that we will <br>send you an email with the reset link to reset your password.</p>
            <?php echo $alert;?>
            <form action="" method="POST">
                <div style="text-align:center">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter the email" required>
                </div>
                <input type="submit" name="send" value="send">
            </form>
        </div>
    </div>
    <?php include 'includes/footer.php';?>
</body>
</html>