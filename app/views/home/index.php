<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/slideshow.css">
    <link rel="stylesheet" href="css/guestHome.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
<noscript>
	<div id="noJS" title="Alert!" class="noJS">
		<div class="w-icon"><img src="assets/images/warning120.png" alt="Warning"></div>
  		<p>Javascript is disabled in you browser! Please enable to continue.&nbsp;&nbsp;</p>
	</div>
</noscript>
    <?php include 'includes/header.php';?>
    <?php include 'includes/guestNav.php';?>
    <div class="slideshow-container" >

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="images/welcome.png" style="width:100%;height:400px">
            <div class="text">Welcome</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="images/district.png" style="width:100%;height:400px">
            <div class="text">Railway Station - Galle</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="images/fort.png" style="width:100%;height:400px">
            <div class="text">Galle Fort</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="images/fishing.png" style="width:100%;height:400px">
            <div class="text">Traditional Fishing</div>
        </div>
        <!-- Manual slides changers -->
        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

    </div>

    <div style="text-align:center;" >
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
    </div>
    <div class="button-container clearfix">
        <a href="/Galle-District-mis/ongoing_projects">Ongoing Projects</a>
        <a href="/Galle-District-mis/finished_projects">Finished Projects</a>
        <a href="/Galle-District-mis/annual_reports">Annual Progress</a>
    </div>
    <?php require_once('includes/footer.php');?>
    <script src="js/slideshow.js"></script>
</body>
</html>