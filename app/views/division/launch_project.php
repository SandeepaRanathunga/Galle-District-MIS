<?php
    // require_once('includes/session.php');
    $proposal_list=$this->getProposalList();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/monthlyReportstyle.css">
    <link rel="stylesheet" href="css/alertBox.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/divNav.php');?>
    <div class="tag">
        <h2>Launch Project</h2>
    </div>
    <div class="container">
        <div class="formarea clearfix">
            <form action="" method="POST" id="launch_form">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" required>
                </div>
                <div>
                    <label for="proposal_id">Proposal</label>
                    <select name="proposal_id" id="" required>
                    <option disabled selected value>Select</option>
                        <?php
                            foreach($proposal_list as $proposal):
                        ?>
                        <option value="<?php echo $proposal['proposal_id'];?>"><?php echo $proposal['description'];?></option>
                        <?php
                            endforeach; 
                        ?>
                    </select>
                </div>
                <div>
                    <label for="estimated_duration">Estimated Duration</label>
                    <input type="date" name="start_date" required>
                    <label for="to" style="width:20px;text-align:center">to</label>
                    <input type="date" name="end_date">
                </div>
                <div>
                    <label for="project_id">Contractor</label>
                    <select name="contractor_id" id="" required> 
                        <option disabled selected value>Select</option>    
                        <option value="div01c01">Distrcit secretariat</option>
                        <option value="div02c02">Akmeemana</option>
                    </select>
                </div>
                <div>
                    <input type="reset" value="Cancel">
                    <input type="submit" value="Submit" name="submit" id="submit"> 
                </div>
            </form>
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
    <script src="js/launch.js"></script>
</body>
</html>