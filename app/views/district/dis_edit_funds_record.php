
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
    <div class='container'>
        <div class="formarea clearfix">
            <form name="formEdit" method="post" action="" id="formEdit">
                <div>            
                    <label for="agency_name">Agency Name</label>
                    <input type="text" name="agency_name" id="agency_name" required value="<?php echo $result[0]["agency_name"]; ?>">
                </div>
                <div>
                    <label for="funds_received">Funds Received</label>
                    <input type="text" name="funds_received" id="funds_received" required
                     value="<?php echo $result[0]["funds_recived"]; ?>">
                </div>
                <div>
                    <label for="date">Date</label>
                    <input type="text" name="date" id="date" required value="<?php echo $result[0]["date"]; ?>">
                </div>
                <div>
                    <label for="num_of_projects">Number of projects</label>
                    <input type="text" name="num_of_projects" id="num_of_projects" required value="<?php echo $result[0]["num_of_projects"]; ?>">
                </div>
                <div>
                    <label for="$total_expense">Total expense</label>
                    <input type="text" name="total_expense" id="total_expense" required value="<?php echo $result[0]["total_expense"]; ?>">
                </div>
                <div>
                    <label for="total_balance">Total balance</label>
                    <input type="text" name="total_balance" id="total_balance" required value="<?php echo $result[0]["total_balance"]; ?>">
                </div>
                <div>
                    <input type="submit" name="save" value="Save">
                </div>
            </form>
        </div>   
    </div>
    <?php require_once('includes/footer.php');?>
</body>
</html>