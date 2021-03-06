<?php
    // require_once('includes/session.php');
    $result=$this->result;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handeling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/userPage.css">
    <link rel="stylesheet" href="css/tableStyles.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/disNav.php');?>
    <div class="tag">
        <h2>Project proposals</h2>
    </div>
    <div class="container">
        <center>
        <table id="table-style">
            <tr>
                <th>View Status</th>
                <th>Approval Status</th>
                <th>Division Name</th>
                <th>Proposal Description</th>
                <th>Submitted Date</th>
                <th>Action</th>
            </tr>
            <?php
                foreach($result as $row):
            ?>
            <tr>
                <td><h4 style=<?php echo ($row[5]=='viewed' ? 'background-color:#355f25': 'background-color:#ff1100');?>><?php echo $row[5];?></h4></td>
                <td><h4 style=<?php echo ($row[6]=='pending' ? 'background-color:#FFC107': ($row[6]=='approved' ? 'background-color:#28A745' : 'background-color:#DC3545'));?>><?php echo $row[6];?></h4></td>
                <td><?php echo $row[0];?></td>
                <td style="text-align:left"><?php echo $row[3];?></td>
                <td><?php echo $row[7];?></td>

                <td><a href="<?php echo 'dis_view_proposal?id='.$row[1];?>" class="view_button">View</a></td>
            </tr>
            <?php
                endforeach;
            ?>     
        </table>
        </center>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>