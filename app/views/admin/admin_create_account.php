<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new account- Administrator</title> <!--Change name here-->
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/adminCreateAccount.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/contractorHeader.php');?> <!--Change Header here-->

    <div class="tag">
        <a href="admin_create_account"><h2>Create new user accounts</h2></a>
    </div>

    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" id="newUser">
                <div>
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id">
                </div>
                <div>
                    <label for="office_id">Office ID</label>
                    <input type="text" name="office_id">
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="office">Office</label>
                    <select name="office" id="office" form="newUser">
                        <option value="office_1"> Office 1 </option>
                        <option value="office_2"> Office 2 </option>
                        <option value="office_3"> Office 3 </option>
                        <option value="office_4"> Office 4 </option>
                        <option value="office_5"> Office 5 </option>
                    </select>
                </div>
                <div>
                    <label for="designation">Designation</label>
                    <input type="text" name="designation">
                </div>
                <div>
                    <label for="nic">NIC</label>
                    <input type="text" name="nic">
                </div>
                <div>
                    <label for="contactno">Contact Number</label>
                    <input type="text" name="contactno">
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <label for="confirmpassword">Re-enter Password</label>
                    <input type="password" name="confirmpassword">
                </div>
                
                <div>
                    <input type="button" value="Cancel">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>