<?php
    $data=$this->getProposalData();
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
    <link rel="icon" href="images/logo.png">
    <title>Document</title>
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/disNav.php');?>
    <div class="tag">
        <h2>Project Proposal</h2>
    </div>
    <div class="container proposal_container">
        <div class="detail_box">
            <div class="content_line">
                <label for="Divisional Secretariat">Divisional Secretariat : </label>
                <?php echo $data[0];?>
            </div>
            <div class="content_line">
                <label for="Descrtiption">Proposal Description : </label>
                <?php echo $data[3];?>
            </div>
            <div class="content_line"> 
                <label for="status">Aprooval Status : </label>
                <?php echo $data[6];?>
            </div>
            <div class="content_line"> 
                <label for="status">Submitted Date : </label>
                <?php echo $data[7]?>
            </div>
        </div>
        <div class="task_box">
            <div>
                <a href="uploads/proposal/<?php echo $data[4];?>" download ><img src="svg/download.svg" alt="" class="download_btn"></a>
            </div>
            <h4>Click the icon to download the proposal</h4>    
        </div>
        <div class="evaluation_box" style="<?php echo ($data[6]=='pending') ? 'display:flex' : 'display:none' ?>">
            <form action="" method="post">
                <input type="text" name="proposal_id" id="" value="<?php ?>">
                <button name="approve" class="approve" type="submit">Approve</button>
                <button name="reject" class="reject" type="submit">Reject</button>
            </form>
        </div>
        <div class="status_box" style="<?php echo ($data[6]=='pending') ? 'display:none' : 'display:flex' ?>">
            <div class="state" style="<?php echo ($data[6]=='approved') ? 'display:flex' : 'display:none' ?>">
                <img src="images/approved.png" alt="" class="approve_img">
                <h4>Approved</h4>
                <div><label for="status">Approved Date : </label>
                    <?php echo "23rd of March 2021 "?>
                </div>
            </div>
            <div class="state" style="<?php echo ($data[6]=='rejected') ? 'display:flex' : 'display:none' ?>">
                <img src="images/rejected.png" alt="" class="approve_img">
                <h4>Rejected</h4>
                <div><label for="status">Rejected Date : </label>
                    <?php echo "23rd of March 2021 "?>
                </div>
            </div>
            
        </div>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>