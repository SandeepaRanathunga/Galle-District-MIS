<?php
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
    <link rel="stylesheet" href="css/loginstyle.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <div class="loginBox">
    <h2>Welcome</h2>
        <?php
            if(isset($_POST['login'])):
                //trying to log without entering data
                if($_POST['username']=='' || $_POST['password']==''):
        ?>
            <h3><?php echo 'Username and password can not be empty!'?></h3>
        <?php
                //incorrect username or password        
                elseif($_POST['username']!='sandeepa' || $_POST['password']!=1234):
        ?>
            <h3><?php echo 'Invalid loging details!'?></h3>
        <?php
                endif;
            endif;
        ?>

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
    </form>
    </div>
</body>
</html>