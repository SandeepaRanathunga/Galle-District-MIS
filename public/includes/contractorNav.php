<div class="topnav clearfix" id="navbar">
    <?php
        if(!isset($_GET['url'])){
            $currentPage="guest_home";
        }
        else{
            $currentPage=$_GET['url'];
        }
    ?>
        <a href="contractor_home" <?php if($currentPage=='contractor_home') echo "class=active"?>>Dashboard</a>
        <a href="javascript:void(0);" class="icon" onclick="addResponsiveness()"><i class="fa fa-bars"></i></a>
</div>