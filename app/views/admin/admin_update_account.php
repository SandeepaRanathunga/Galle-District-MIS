<?php
        $fetch_arr =$this->viewDetailsinForm();
        $fetch = $fetch_arr ;
        // var_dump ($fetch) ;
        //<br /><b>Notice</b>:  Undefined variable: print_arr in <b>C:\xampp\htdocs\Galle-District-MIS\app\views\admin\admin_update_account.php</b> on line <b>57</b><br /><br /><b>Notice</b>:  Trying to access array offset on value of type null in <b>C:\xampp\htdocs\Galle-District-MIS\app\views\admin\admin_update_account.php</b> on line <b>57</b><br />

        //$content_arr = $this->getContent() ;
        //$content = $content_arr['about_us_info'] ;

        // $print_arr = $this->testView() ;


        // $print = $print_arr['name'] ;
        // echo $print ;


        // print_r($fetch);
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
                <input type="submit"  value="Search" name="search">
            </form>
        </div>                     
    </div>
        <div class="formarea clearfix">
            <form action="" method="POST" id="updateUser">
                <!--Here starts the generated form-->
                <div>
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" value="<?php echo $fetch==NULL ? '' : $fetch['user_id']?>" readonly>
                </div>
                <!-- <div>
                    <label for="office_id">Office ID</label>
                    <input type="text" name="office_id" value="<?php echo $fetch==NULL ? '' : "District Swecretariat"?>" readonly>
                </div> -->
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo $fetch==NULL ? '' : $fetch['name']?>">
                </div>
                <div>
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" value="<?php echo $fetch==NULL ? '' : $fetch['designation']?>">
                </div>
                <div>
                    <label for="nic">NIC</label>
                    <input type="text" name="nic" value="<?php echo $fetch==NULL ? '' : $fetch['nic']?>">
                </div>
                <div>
                    <label for="contactno">Contact Number</label>
                    <input type="text" name="contactno" value="<?php echo $fetch==NULL ? '' : $fetch['contact_no']?>">
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" value="<?php echo $fetch==NULL ? '' : $fetch['email'] ?>">
                </div>
                

                <div class="submit-cancel">
                    <input type="reset" value="Cancel" name="cancel">
                    <input type="submit" value="Update" name="submit">

                </div>
            </form>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>