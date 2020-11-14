<header class=clearfix>
        <div class="branding">
            <img src="./images/logo.png" alt="logo" class="logo">
        </div>
        <div class="districtTag">
            <h2>Galle District Secretariat</h2>
            <h3>Project Handling and Evaluation MIS</h3>
        </div>     
</header>

<nav class="clearfix" id="myNavbar">
    <?php $fileName=basename($_SERVER['PHP_SELF'])?>

    
        <a href="admin_home.php" <?php if($fileName=='admin_home.php') echo "class=active"?>>Home</a>
        <br>
        <p style="float:right; color:red;"> Hello Username!   (Logout) </p>
        
        
</nav>

