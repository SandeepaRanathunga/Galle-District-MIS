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
    <link rel="icon" href="images/logo.png">
    <style>
        table,td,tr,th{
            border:1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/disNav.php');?>
    <div class="tag">
        <h2>Project proposals</h2>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>View Status</th>
                <th>Approval Status</th>
                <th>Division Name</th>
                <th>Proposal Description</th>
                <th>Submited Date</th>
                <th colspan=2>Action</th>
            </tr>
            <?php
                foreach($result as $row):
            ?>
            <tr>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[6];?></td>
                <td><?php echo $row[0];?></td>
                <td><?php echo $row[3];?></td>
                <td><?php echo $row[7];?></td>

                <td><a href="<?php echo 'view_proposal?id='.$row[1];?>">View</a></td>
                <td><a href="<?php echo 'delete?id='.$row[1];?>">Clear</a></td>
            </tr>
            <?php
                endforeach;
            ?>
            
        </table>
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>