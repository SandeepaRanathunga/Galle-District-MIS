
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contractor Signup</title> <!--Change name here-->
    <?php include 'includes/cssLinks.php';?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">

    <link rel="stylesheet" href="css/adminCreateAccount.css">
    <link rel="stylesheet" href="css/monthlyReportStyle.css">
    <link rel="icon" href="images/logo.png">
    <style>
        .warning{
            display:inline-block;
            
        }
    </style>
</head>
<body>
    <header class=clearfix>
        <div class="branding">
            <img src="images/logo-header.png" alt="logo" class="logo">
        </div>
        <div class="districtTag">
            <h2>Galle District Secretariat</h2>
            <h3>Project Handling and Evaluation MIS</h3>
        </div>
        
        <div class="user" id="user">
            <a href="login"><i class="fas fa-user"></i></a>
        </div>
        </header>

    <div class="topnav clearfix" id="navbar">
            <a href="/Galle-District-mis/" >Home</a>
        <a href="projects" >Projects</a>
        <a href="annual_reports" >Reports</a>
        <a href="contractors" >Contractors</a>
        <a href="about_us" >About Us</a>
        <a href="javascript:void(0);" class="icon" onclick="addResponsiveness()"><i class="fa fa-bars"></i></a>
</div>

    <div class="tag">
        <h2>Contractor Signup</h2>
    </div>

    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" id="newUser" onsubmit="return signupValidate()">
            
            <div> 
                    <label for="user_id">Contractor Name</label>
                    <input type="text" name="user_id" id="user_id" minlength="7" maxlength="7" readonly>
                </div>

                <div> 
                    <label for="user_id">Registration Number</label>
                    <input type="text" name="user_id" id="user_id" minlength="7" maxlength="7" readonly>
                </div>
                <div>
                    <label for="name">Specialized Field</label>
                    <input type="text" name="name" id="name" required>
                </div>
                
                <div>
                    <label for="designation">Office Address</label>
                    <input type="text" name="designation" id="designation" required>
                </div>
                
                <div>
                    <label for="contactno">Contact Number</label>
                    <input type="text" name="contact_no" id="contact_no" minlength="10" maxlength="10" pattern="[0-9]+" title="Enter 10 digit mobile number" required>
                </div>
                <div>
                    <label for="nic">Fax</label>
                    <input type="text" name="nic" id="nic" minlength="10" maxlength="12" title="Enter 10 digit nic with v and 12 digit nic without v" required>
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain atleast one number,lowecase,uppercase and 8 or more charactors" onkeyup="checkPasswordPattern()" required>
                    <p id="pattern" class="warning"></p>
                </div>
                <div>
                    <label for="confirmpassword">Re-enter Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" onkeyup="confirmPassword()" required>
                    <p id="confirm_warning" class="warning"></p>
                </div>

                <div class="agreement">
                        <input type="checkbox" id="agreement" name="agreement" required>
                        <label for="agreement" class="normText" style="width:auto;">I hereby declare that the information given in this application is true and correct to the best of my knowledge and belief. In case any information given in this proves to be false or incorrect, I shall be responsible for the consequences of request being rejected permanently.</label>
                    </div>
                
                <div class="clearfix">
                    <input type="reset" value="Cancel">
                    <input type="submit" value="Submit" name="submit" id="submit">
                </div>
            </form>
        </div>
    </div>
    <script src="js/signup_validation.js"></script>
    <footer>
    <div class="footerbox"> 
        <div class="blue" >
            <div style="flex:1">
                    <h2>Related Links</h2>
            </div>
            <div class="link_container">
                <img src="./images/logo-footer.png">
                <div style="">
                        <h2>Galle District Secretariat</h2>
                        <a href="http://www.galle.dist.gov.lk/">www.galle.dist.gov.lk</a>
                </div>        
            </div>
            <div class="link_container">
                <img src="./images/logo-footer.png">
                <div>
                        <h2>Ministry of Home Affairs</h2>
                        <a href="http://www.moha.gov.lk/">www.moha.gov.lk</a> 
                </div>
            </div>
        </div>     
        <div class="black" > 
                <h2 >
                Copyright © 2020 Galle District Secretariat. All Rights Reserved.<br>Developed in Association with <span> 4Coders</span>
                </h2>
                <img src="./images/footer_gif.gif">  
        </div>
    </div>
</footer>
<script src="js/navigation.js"></script>
</body>
</html>