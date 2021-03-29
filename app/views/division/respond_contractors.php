<?php
    // require_once('includes/session.php');
    $result = $this->getResult();
    print_r($result);
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
    <?php require_once('includes/divNav.php');?>
    <div class="tag">
        <h2>Respond to contractor requests</h2>
    </div>
    <div class="container">
    <center>
        <table id="table-style">
            <tr>
                <th>View Status</th>
                <th>Approval Status</th>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Specialized Field</th>
                <th>Office Address</th>
                <th>Contact Number</th>
                <th>e-mail</th>
                <th>Requested Date</th>
                <th colspan=2>Action</th>
            </tr>
            <?php
                foreach($result as $row):
            ?>
            <tr>
                <td><h4 style=<?php echo ($row[1]=='viewed' ? 'background-color:#355f25': 'background-color:#ff1100');?>><?php echo $row[1];?></h4></td>
                <td><h4 style=<?php echo ($row[2]=='pending' ? 'background-color:#FFC107': ($row[6]=='approved' ? 'background-color:#28A745' : 'background-color:#DC3545'));?>><?php echo $row[2];?></h4></td>
                <td><?php echo $row[3];?></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[6];?></td>
                <td><?php echo $row[7];?></td>
                <td><?php echo $row[8];?></td>
                <td><?php echo $row[9];?></td>
                <td><a href="<?php echo 'respond_contractors?id='.$row[0];?>" class="view_button">View</a></td>
                <td><a href="<?php echo 'delete?id='.$row[0];?>" class="view_button">Clear</a></td>
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