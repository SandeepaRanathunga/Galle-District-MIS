<?php
    $alert='';
    if(isset($_POST['login'])){
        //loging data correct
        if($_POST['username']=='sandeepa' && $_POST['password']==1234){
            session_start();
            $_SESSION['username']=$_POST['username'];
            header('Location:#');
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/loginstyle.css" type="text/css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include 'includes/guestHeader.php';?>
    <div class="container">
        <div>
            <div class="loginBox">
                <h2>Welcome</h2>
                    <?php echo $alert;?>
                <form action="" method="post">
                    <div>
                        <label for="username"><i class="fa fa-user"></i></label>
                        <input type="text" name="username" placeholder="Enter the username">
                    </div>
                    <div>
                        <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i></label>
                        <input type="password" name="password" placeholder="Enter the password">
                    </div>
                    <div>
                        <input type="submit" name="login" value="Login">
                    </div>
                    <div class="forgotLink"><a href="#">Forgot your password?</a></div>
                </form>
            </div>
        </div>
        <div class="mask">
            <img src="images/mask.png" alt="This is a mask" class="mask">
        </div>
    </div>
    <?php include 'includes/footer.php';?>
</body>
</html>