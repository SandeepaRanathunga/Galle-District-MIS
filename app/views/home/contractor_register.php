<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title> <!--Change name here-->
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/adminCreateAccount.css">
    <link rel="icon" href="images/logo.png">
    <style>
        .warning{
            display:inline-block;
            
        }
    </style>
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/guestNav.php');?>

    <div class="tag">
        <h2>Contractor Register</h2>
    </div>

    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" id="newUser" onsubmit="return signupValidate()">
            <center>
            <div>
                    <label for="office">Division</label>
                    <select name="office_id" id="office_id" onchange="setUserID()" required>
                        <option disabled selected value>Select</option>
                        <option value="dis00">District Secretariat</option>   
                        <?php
                            foreach($divisions as $division):
                        ?>
                        <option value="<?php echo $division[0];?>"><?php echo $division[1].' - '.$division[0];?></option>
                        <?php
                            endforeach; 
                        ?>
                        
                    </select>
                    <p id="office_warning"></p>
                </div>
                <div> 
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" id="user_id" minlength="7" maxlength="7" readonly>
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                
                <div>
                    <label for="reg_no">Registration Number</label>
                    <input type="text" name="reg_no" id="reg_no" required>
                </div>
                <div>
                    <label for="specialized_field">Specialized Field</label>
                    <input type="text" name="specialized_field" id="specialized_field" required>
                </div>
                <div>
                    <label for="nic">NIC</label>
                    <input type="text" name="nic" id="nic" minlength="10" maxlength="12" title="Enter 10 digit nic with v and 12 digit nic without v" required>
                </div>
                <div>
                    <label for="office_address">Office Address</label>
                    <input type="text" name="office_address" id="office_address" required>
                </div>
                <div>
                    <label for="contactno">Contact Number</label>
                    <input type="text" name="contact_no" id="contact_no" minlength="10" maxlength="10" pattern="[0-9]+" title="Enter 10 digit mobile number" required>
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
                </center>
                <div>
                        <input type="checkbox" id="agreement" name="agreement" required>
                        <center>
                        <label for="agreement" class="normText" style="width:auto;">I hereby declare that the information given in this application is true and correct to the best of my knowledge and belief. In case any information given in this proves to be false or incorrect, I shall be responsible for the consequences of request being rejected permanently.</label>
                        </center>
                </div>
                
                <div class="clearfix">
                    <input type="reset" value="Cancel">
                    <input type="submit" value="Submit" name="submit" id="submit">
                </div>
                        
            </form>
        </div>
    </div>
    <script src="js/signup_validation.js"></script>
    <?php require_once('includes/footer.php');?>
</body>
</html>