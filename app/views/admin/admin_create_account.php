<?php
    $divisions=$this->divisions;
    if(isset($_SESSION['submit'])){
        var_dump($_SESSION);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title> <!--Change name here-->
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
    <?php //require_once('#');?>

    <div class="tag">
        <h2>Create new user accounts</h2>
    </div>

    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" id="newUser" onsubmit="return signupValidate()">
                <div> 
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" id="user_id" minlength="7" maxlength="7" required>
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <label for="office">Office</label>
                    <select name="office_id" id="office_id" required>
                        <option disabled selected value>selcet</option>
                        <option value="dis00">District Secretariat - dis00</option>   
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
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" id="designation" required>
                </div>
                <div>
                    <label for="nic">NIC</label>
                    <input type="text" name="nic" id="nic" minlength="10" maxlength="12" title="Enter 10 digit nic with v and 12 digit nic without v" required>
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
                
                <div>
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