<?php
    // require_once('includes/session.php');
?>
<?php
    $divisions=$this->divisions;
    $emails=$this->emails;
?>
<script></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title> <!--Change name here-->
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/adminAccountForms.css">
    <link rel="icon" href="images/logo.png">
    <style>
        .warning{
            display:inline-block;    
        }
    </style>
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/adminNav.php');?>

    <div class="tag">
        <h2>User Registration</h2>
    </div>

    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" id="newUser" onsubmit="return signupValidate()">
            <div>
                    <label for="office">Office</label>
                    <select name="office_id" id="office_id" onchange="setUserID()" required>
                        <option disabled selected value>Select</option>
                        <option value="dis00">District Secretariat</option>   
                        <?php
                            foreach($divisions as $division):
                        ?>
                        <option value="<?php echo $division[0];?>"><?php echo $division[1];?></option>
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
                <div class="submit-cancel">
                    <input type="reset" value="Cancel">
                    <input type="submit" value="Submit" name="submit" id="submit">
                </div>
            </form>
        </div>
    </div>
    <script>
        let emails=<?php echo json_encode($emails);?>;
    </script>
    <script src="js/signup_validation.js"></script>
    <?php require_once('includes/footer.php');?>
</body>
</html>