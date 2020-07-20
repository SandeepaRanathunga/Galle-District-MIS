<header class=clearfix>
        <div class="branding">
            <img src="images/logo.png" alt="logo" class="logo">
        </div>
        <div class="districtTag">
            <h2>Galle District Secretariat</h2>
            <h3>Project Handling and Evaluation MIS</h3>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><i class="fas fa-user"></i></button>
            <div class="droplist">
                <a href="#">Profile</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
</header>
<nav class="clearfix" id="myNavbar">
    <?php $fileName=basename($_SERVER['PHP_SELF'])?>
        <a href="home.php" <?php if($fileName=='index.php') echo "class=active"?>>Home</a>
        <a href="users.php" <?php if($fileName=='users.php') echo "class=active"?>>Users</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>AAA</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>BBB</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>CCC</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>DDD</a>
</nav>
