<!DOCTYPE html>
<html>

<header>
    <title>Shopping Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="...">
    <link rel="stylesheet" type="text/css" href="styles/style.css">  
    <script type="text/javascript" src="js/main.js"></script>  
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>

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