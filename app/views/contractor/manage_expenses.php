
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Handelling and Evaluation MIS</title>
    <?php include 'includes/cssLinks.php';?>
    <link rel="stylesheet" href="css/tableStyles.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/contractorNav.php');?>
    <div class="tag">
            <h2>Manage Expenses</h2>
        </div>
    <div class='container'>

        <center>
        <div>
            <table id="table-style" style="width:70%">
                <tr>
                    <th>Date</th>
                    <th>Project ID</th>
                    <th>Daily Expenses</th>
                </tr>
                <tr>
                    <td>05/10/2020</td>
                    <td>div02HP01</td>
                    <td>500,000</td>
                </tr>
                <tr>
                    <td>25/09/2020</td>
                    <td>div02HP01</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>10/09/2020</td>
                    <td>div02HP06</td>
                    <td>100,000</td>
                </tr>
            </table>
        </div>

        </center>
        <div class="submit-cancel">
            <input type="submit" value="Add expenses" name="submit" onclick="window.location='add_expenses'";>
            <!-- <input type="submit" value="Update" name="submit"> -->
        </div> 
        <center>
        <div>
            <table id="table-style" style="width:70%">
                <tr>
                    <th>Project ID</th>
                    <th>Total Expenses</th>
                </tr>
                <tr>
                    <td>div02HP01</td>
                    <td>600,000</td>
                </tr>
                <tr>
                    <td>div02HP06</td>
                    <td>100,000</td>
                </tr>
            </table>
        </div>
        <center>
    </div>
    <?php require_once('includes/footer.php');?> 
</body>
</html>