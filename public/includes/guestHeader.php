<header class=clearfix>
        <div class="branding">
            <img src="./images/logo.png" alt="logo" class="logo">
        </div>
        <div class="districtTag">
            <h2>Galle District Secretariat</h2>
            <h3>Project Handling and Evaluation MIS</h3>
        </div>
        <div class="dropdown">
            <!-- <button class="dropbtn"><i class="fas fa-user"></i></button> -->
            <a href="login.php" class="loginpage"><i class="fas fa-user"></i></a>
            </div>
        </div>
</header>
<nav class="clearfix" id="myNavbar">
    <?php $fileName=basename($_SERVER['PHP_SELF'])?>
        <a href="index.php" <?php if($fileName=='index.php') echo "class=active"?>>Home</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>Projects</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>Reports</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>Contractors</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>About Us</a>
</nav>
