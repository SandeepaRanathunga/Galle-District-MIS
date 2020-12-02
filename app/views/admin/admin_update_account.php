<?php
    // require_once('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User account- Administrator</title> <!--Change name here-->
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/adminAccountForms.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/adminNav.php');?>

    <div class="tag">
        <h2>Update user accounts</h2>
    </div>


    <div class="container">
    <div class="searchbox">
        <div class="searcharea" >
            <!--Form Box to Enter ID reqiured to update details-->

            <form action="" method="POST" id="searchId">
                <label for="user_id">Enter ID</label>
                <input type="text"  name="search_user_id" placeholder="Enter ID to search...">
            <!--Submit ID for search-->
                <input type="submit"  value="Search" name="submit">
                
            </form>
        </div>                     
    </div>
        <div class="formarea clearfix">
            <form action="" method="POST" id="updateUser">
                <!--Here starts the generated form-->
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
                    <select name="office" id="office" form="updateUser">
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
                <!--<div>
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <label for="confirmpassword">Re-enter Password</label>
                    <input type="password" name="confirmpassword">
                </div>-->
                
                <div>
                    <input type="reset" value="Cancel">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>