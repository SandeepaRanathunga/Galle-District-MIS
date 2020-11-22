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
        <a href="projects" <?php if($currentPage=='') echo "class=active"?>>Projects</a>
        <a href="annual_reports" <?php if($currentPage=='annual_reports') echo "class=active"?>>Reports</a>
        <a href="contractors" <?php if($currentPage=='#') echo "class=active"?>>Contractors</a>
        <a href="about_us" <?php if($currentPage=='about_us') echo "class=active"?>>About Us</a>
        <a href="javascript:void(0);" class="icon" onclick="addResponsiveness()"><i class="fa fa-bars"></i></a>
</div>
