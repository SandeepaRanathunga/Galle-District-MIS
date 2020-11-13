<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/update_about_us_info.css" type="text/css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include 'includes/UpdateAboutus.php';?>
    <div class="container">
    <nav class="clearfix" id="myNavbar">
    <?php $fileName=basename($_SERVER['PHP_SELF'])?>
        <div class="button-container">
            
            <a href="#" <?php if($fileName=='#') echo "class=active"?>>Update About Us Info</a>
        
            <form action="" method="post">
                    <div class="label-text">
                            <textarea id="updateaboutus" name="updateaboutus" rows="15" cols="190">
                            <!-- Link to what's entered already -->
                            </textarea>
                    </div>
                     
                    <div class="update-cancel">
                    <div class="button">
                        <input type="submit" name="update" value="Update">
                    </div>   
                    <div class="button"> 
                        <input type="submit" name="cancel" value="Cancel">
                    </div>
                    </div>
                </form>
            
        
        </div>
    </div>
    </nav>
</body>
</html>