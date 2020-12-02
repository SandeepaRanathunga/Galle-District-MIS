
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
            <h2>Manage Expenses</h2>
        </div>
    <div class='container'>

        <center>
        <div style="overflow-x:auto;">
            <table id="funds">
                <tr>
                    <th>Date</th>
                    <th>Project ID</th>
                    <th>Expenses</th>
                    <th>Total Expenses</th>
                </tr>
                <tr>
                    <td>05/08/2020</td>
                    <td>div02HP01</td>
                    <td>500,000</td>
                    <td>500,000</td>
                </tr>
                <tr>
                    <td>25/08/2020</td>
                    <td>div02HP01</td>
                    <td>100,000</td>
                    <td>600,000</td>
                </tr>
            </table>
        </div>
        </center>
        <div>
            <input type="submit" value="Edit" name="submit">
            <input type="submit" value="Update" name="submit">
        </div> 
          
    </div>
    <?php require_once('includes/footer.php');?> 
</body>
</html>