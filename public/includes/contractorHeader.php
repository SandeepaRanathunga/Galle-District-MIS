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
        <a href="contractor_home" <?php if($fileName=='contractor_home') echo "class=active"?>>Home</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>Projects</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>Reports</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>About us</a>
        <p style="float:right; color:red;"> Hello Username!   (Logout) </p>
        
</nav>

