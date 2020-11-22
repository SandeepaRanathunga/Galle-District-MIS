
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
    <?php //require_once('#');?>
    <div class="container">
        <div class="tag">
            <h2>Manage funds</h2>
        </div>
        <center>
        <div style="overflow-x:auto;">
            <table id="funds">
                <tr>
                    <th>Index number</th>
                    <th>Funding source</th>
                    <th>Received funds</th>
                    <th>Received date</th>
                    <th>Allocated number of projects</th>
                    <th>Total expense</th>
                    <th>Total balance</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ministry of Urban Development</td>
                    <td>13, 000, 000</td>
                    <td>11-07-2020</td>
                    <td>1</td>
                    <td>450, 000</td>
                    <td>850, 000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ministry of Housing and Construction</td>
                    <td>10, 000, 000</td>
                    <td>23-09-2020</td>
                    <td>2</td>
                    <td>950, 000</td>
                    <td>350, 000</td>
                </tr>
            </table>
        </div>
        </center>
        <div class="check">
            <input type="submit" value="Update" name="submit">
            <input type="submit" value="Edit" name="submit">
        </div> 
        <?php require_once('includes/footer.php');?>   
    </div>
</body>
</html>