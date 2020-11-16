<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title> <!--Change name here-->
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/adminCreateAccount.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php //require_once('#');?>

    <div class="tag">
        <h2>Create new user accounts</h2>
    </div>

    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" id="newUser">
                <div>
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id">
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="office">Office</label>
                    <select name="office" id="">
                        <option value="div00" disabled selected value>selcet</option>    
                        <option value="div00">Distrcit secretariat</option>
                        <option value="div01">Akmeemana</option>
                        <option value="div02">Ambalangoda</option>
                        <option value="div03">Baddegama</option>
                        <option value="div04">Balapitiya</option>
                        <option value="div05">Benthota</option>
                        <option value="div06">Bope-Poddala</option>
                        <option value="div07">Elpitiya</option>
                        <option value="div08">Galle Four Gravets</option>
                        <option value="div09">Habaraduwa</option>
                        <option value="div10">Hikkaduwa</option>
                        <option value="div11">Imaduwa</option>
                        <option value="div12">Karandeniya</option>
                        <option value="div13">Nagoda</option>
                        <option value="div14">Neluwa</option>
                        <option value="div15">Niyagama</option>
                        <option value="div16">Thawalama</option>
                        <option value="div17">Welivitiya-Divithura</option>
                        <option value="div18">Yakkalamulla</option>
                        <option value="div19">Gonapinuwala</option>
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
                    <input type="reset" value="Cancel">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>