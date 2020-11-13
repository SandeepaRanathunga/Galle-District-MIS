<div class="topnav clearfix" id="navbar">
    <!-- <?php $fileName=basename($_SERVER['PHP_SELF'])?> -->
    <?php
        // $fileName=$_GET['url'];
        // echo $fileName;
    ?>
        <a href="/Galle-District-mis/" <?php if($fileName=='') echo "class=active"?>>Home</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>Projects</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>Reports</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>Contractors</a>
        <a href="#" <?php if($fileName=='#') echo "class=active"?>>About Us</a>
        <a href="javascript:void(0);" class="icon" onclick="addResponsiveness()"><i class="fa fa-bars"></i></a>
</div>
