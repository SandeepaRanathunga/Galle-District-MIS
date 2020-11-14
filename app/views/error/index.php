<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 not found</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/errorpage.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <?php include 'includes/header.php';?>
    <div class="container">
        <div class="error">
            <h1>404!</h1>
            <h2>Sorry, Page not found!</h2>
        </div>
        <div class="banner">
            <img src="images/404.gif" alt="banner_404">
        </div>
    </div>
    <?php include 'includes/footer.php';?>
    <script>
        document.getElementById('user').style.display="none";
    </script>
</body>
</html>