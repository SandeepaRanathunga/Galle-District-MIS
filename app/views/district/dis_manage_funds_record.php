<<<<<<< HEAD
=======
<?php
    // require_once('includes/session.php');
?>
>>>>>>> mvc
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/disManageFunds.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/disNav.php');?>
    <div class="tag">
        <h2>Manage funds</h2>
    </div>
    <div class='container'>
        <center>
        <div style="overflow-x:auto;">
            <table id="funds">               
                <thead>
                    <tr>
                        <th>Index number</th>
                        <th>Funding source</th>
                        <th>Received funds</th>
                        <th>Received date</th>
                        <th>Allocated number of projects</th>
                        <th>Total expense</th>
                        <th>Total balance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!empty($result)){
                        foreach($result as $k => $v){
                    ?>
                            <tr>
                                <td><?php echo $result[$k]["agency_id"]?></td>
                                <td><?php echo $result[$k]["agency_name"]?></td>
                                <td><?php echo $result[$k]["funds_received"]?></td>
                                <td><?php echo $result[$k]["date"]?></td>
                                <td><?php echo $result[$k]["num_of_projects"]?></td>
                                <td><?php echo $result[$k]["total_expense"]?></td>
                                <td><?php echo $result[$k]["total_balance"]?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="check">
            <input type="submit" value="Update" name="submit">
            <input type="submit" value="Edit" name="submit">
        </div>
        </center>  
    </div>
    <?php require_once('includes/footer.php');?> 
</body>
</html>