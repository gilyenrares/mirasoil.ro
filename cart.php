<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="...">
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script type="text/javascript" src="js/main.js"></script> 
</head>

<body>
<?php include 'sections/navigation.sec.php'; ?>


    <div class="products-container">
        <div class="product-header">
            <h5 class="product-title">Produs</h5>
            <h5 class="price">Pret</h5>
            <h5 class="quantity">Cantitate</h5>
            <h5 class="total">Total</h5>
        </div>
        <div class="products">

        </div>
    </div>
<?php include 'sections/footer.sec.php'; ?>
    <script src="cart.js"></script>
</body>

</html>