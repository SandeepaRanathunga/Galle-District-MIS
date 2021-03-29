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
                <td><?php echo $row[1];?></td>
                <td><?php echo $row[2];?></td>
                <td><?php echo $row[3];?></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[6];?></td>
                <td><?php echo $row[7];?></td>
                <td><?php echo $row[8];?></td>
                <td><?php echo $row[9];?></td>
                <td><a href="<?php echo 'respond_contractors?id='.$row[0];?>">View</a></td>
                <td><a href="<?php echo 'delete?id='.$row[0];?>">Clear</a></td>
            </tr>
            <?php
                endforeach;
            ?>     
        </table>

    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>