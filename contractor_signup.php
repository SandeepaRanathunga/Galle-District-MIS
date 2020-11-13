<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/contractor.css" type="text/css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <title>Project Handelling and Evaluation MIS</title>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include 'includes/contractorheader.php';?>
    <div class="container">
    <nav class="clearfix" id="myNavbar">
    <?php $fileName=basename($_SERVER['PHP_SELF'])?>
        <div class="button-container">
            
            <a href="#" <?php if($fileName=='#') echo "class=active"?>>Contractor Sign Up</a>
        
            <form action="" method="post">
                    <div class="label-text">
                        <div><label class="normText" for="conName">Contractor Name:</label>
                        </div>
                        <input type="text" name="conName">
                    </div>
                    <div class="label-text">
                        <div><label class="normText" for="regNo">Registration No:</label>
                        </div>
                        <input type="text" name="regNo">
                    </div>
                    <div class="label-text">
                        <div><label class="normText" for="special">Specialized Field:</label>
                        </div>
                        <input type="text" name="special">
                    </div>
                    <div class="label-text">
                        <div><label class="normText" for="office">Office Address:</label>
                        </div>
                        <input type="text" name="office">
                    </div>
                    <div class="label-text">
                        <div><label class="normText" for="tel">Telephone No:</label>
                        </div>
                        <input type="text" name="tel">
                    </div>
                    <div class="label-text">
                        <div><label class="normText" for="fax">Fax:</label>
                        </div>
                        <input type="text" name="fax">
                    </div>
                    <div class="label-text">
                        <div><label class="normText" for="email">Email:</label>
                        </div>
                        <input type="text" name="email">
                    </div>
                    <div class="label-text">
                        <div><label class="normText" for="password">Password:</label>
                        </div>
                        <input type="text" name="password">
                    </div>
                    <div class="label-text">
                        <div><label class="normText" for="confirm">Re-enter Password:</label>
                        </div>
                        <input type="text" name="confirm">
                    </div>

                    <div class="agreement">
                        <input type="checkbox" id="agreement" name="agreement">
                        <label for="agreement" class="normText" style="width:auto;">I hereby declare that the information given in this application is true and correct to the best of my knowledge and belief. In case any information given in this proves to be false or incorrect, I shall be responsible for the consequences of request being rejected permanently.</label>
                    </div>
                    <div>
                        <input type="submit" name="login" value="Login">
                    </div>
                    
                </form>
            
            
                
        
        </div>
    </div>
    </nav>
    <
</body>
</html>