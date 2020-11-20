<header class=clearfix>
        <div class="branding">
            <img src="./images/logo.png" alt="logo" class="logo">
        </div>
        <div class="districtTag">
            <h2>Galle District Secretariat</h2>
            <h3>Project Handling and Evaluation MIS</h3>
        </div>     
</header>

<nav class="topnav clearfix" id="myNavbar">
        <?php $fileName=basename($_SERVER['PHP_SELF'])?>    
        <a href="div_home.php" <?php if($fileName=='div_home.php') echo "class=active"?>>Home</a>
        <a href="div_home.php" <?php if($fileName=='#') echo "class=active"?>>Projects</a>
        <a href="div_home.php" <?php if($fileName=='#') echo "class=active"?>>Reports</a>
        <a href="div_home.php" <?php if($fileName=='#') echo "class=active"?>>Contractors</a>
        <a href="div_home.php" <?php if($fileName=='#') echo "class=active"?>>About us</a>
        <a href="javascript:void(0);" class="icon" onclick="addResponsiveness()"><i class="fa fa-bars"></i></a>      
    </div>
</nav>

