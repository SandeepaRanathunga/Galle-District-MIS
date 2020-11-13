<div class="topnav clearfix" id="navbar">
    <?php
        if(!isset($_GET['url'])){
            $currentPage="guest_home";
        }
        else{
            $currentPage=$_GET['url'];
        }
    ?>
        <a href="/Galle-District-mis/" <?php if($currentPage=='guest_home') echo "class=active"?>>Home</a>
        <a href="/Galle-District-mis/projects" <?php if($currentPage=='#') echo "class=active"?>>Projects</a>
        <a href="/Galle-District-mis/reports" <?php if($currentPage=='#') echo "class=active"?>>Reports</a>
        <a href="/Galle-District-mis/contractors" <?php if($currentPage=='#') echo "class=active"?>>Contractors</a>
        <a href="/Galle-District-mis/aboutus" <?php if($currentPage=='#') echo "class=active"?>>About Us</a>
        <a href="javascript:void(0);" class="icon" onclick="addResponsiveness()"><i class="fa fa-bars"></i></a>
</div>
