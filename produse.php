<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Produse</title>
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
  <!--Left Sidebar Holder --> 
<?php include 'sections/left-sidebar.sec.php'; ?>

    <!-- Page Content Holder -->
    <div id="content">
         <?php include'sections/navigation.sec.php' ?>
<!-- Load Facebook SDK for JavaScript -->
      <?php include 'sections/sdk.inc.php' ?>
    
    <?php include 'sections/footer.sec.php'; ?>
    <script src="js/cart.js"></script>
      </div>
   <!--Right Sidebar Holder --> 
    <?php include 'sections/right-sidebar.sec.php' ?>
</body>

</html>