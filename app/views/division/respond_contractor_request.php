<?php
    require_once('includes/session.php');
    $data=$this->getRequestData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userPage.css">
    <link rel="stylesheet" href="css/proposalPage.css">
    <link rel="stylesheet" href="css/alertBox.css">
    <link rel="icon" href="images/logo.png">
    <title>Contractor Request</title>
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/divNav.php');?>
    <div class="tag">
        <h2>Contractor Request</h2>
    </div>
    <div class="container proposal_container">
        <div class="detail_box">
            <div class="content_line">
                <label for="name">Contractor Name: </label>
                <?php echo $data[3];?>
            </div>
            <div class="content_line"> 
                <label for="status">Approval Status : </label>
                <?php echo $data[2];?>
            </div>
            <div class="content_line"> 
                <label for="status">Requested Date : </label>
                <?php echo $data[9]?>
            </div>
        </div>
        
        <div class="task_box">
            <div>
                <a href="uploads/con_reg_copy/<?php echo $data[11];?>" download ><img src="svg/download.svg" alt="" class="download_btn"></a>
            </div>
            <h4>Click the icon to download the document.</h4>    
        </div>
        <div class="evaluation_box" style="<?php echo ($data[2]=='pending') ? 'display:flex' : 'display:none' ?>">
            <form action="" method="post" id="approve_form">
                <input type="hidden" name="approve" value="approve">
            </form>
            <form action="" method="post" id="reject_form">
                <input type="hidden" name="reject" value="reject">
            </form>
            <button name="approve" class="approve">Accept</button>
            <button name="reject" class="reject">Reject</button>
        </div>
        <div class="status_box" style="<?php echo ($data[2]=='pending') ? 'display:none' : 'display:flex' ?>">
            <div class="state" style="<?php echo ($data[2]=='approved') ? 'display:flex' : 'display:none' ?>">
                <img src="images/approved.png" alt="" class="approve_img">
                <h4>Accepted</h4>
                <div><label for="status">Accepted Date : </label>
                    <?php echo "23rd of March 2021 "?>
                </div>
            </div>
            <div class="state" style="<?php echo ($data[2]=='rejected') ? 'display:flex' : 'display:none' ?>">
                <img src="images/rejected.png" alt="" class="approve_img">
                <h4>Rejected</h4>
                <div><label for="status">Rejected Date : </label>
                    <?php echo "23rd of March 2021 "?>
                </div>
            </div>
            
        </div>
    </div>
    <div class="popup_box">
        <i class="fas fa-exclamation"></i>
        <h1>Are you sure you want to proceed!</h1>
        <div class="btns">
            <button class="btn1" id="proceed">Proceed</button>
            <button class="btn2" id="cancel">Cancel</button>
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
    <script src="js/approval.js"></script>
</body>
</html>