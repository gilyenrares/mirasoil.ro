<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="...">
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script type="text/javascript" src="js/main.js"></script>     
</head>

<body class="wrapper">
<!---Facebook SDK--->
<?php include 'sections/sdk.inc.php' ?> 
    <!--Left Sidebar Holder --> 
    <?php include 'sections/left-sidebar.sec.php'; ?>

    <!-- Page Content Holder -->
    <div id="content">
        <?php include'sections/navigation.sec.php'; ?>
        <?php include'includes/open-specs.inc.php'; ?>

<!----------------Footer----------->
    <?php include 'sections/footer.sec.php'; ?>
    </div>
    <!--Right Sidebar Holder --> 
    <?php include 'sections/right-sidebar.sec.php'; ?> 
</body>

</html>