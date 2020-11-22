<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/aboutUs.css">

</head>
<body>
    <?php include 'includes/guestHeader.php';?>
    <div class="container">
    <nav class="clearfix" id="myNavbar">
    <?php $fileName=basename($_SERVER['PHP_SELF'])?>
        <div class="button-container">
            
        <div class="tag">
            <h2>Update About Us</h2>
        </div>
        
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