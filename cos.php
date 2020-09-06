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


<body class="wrapper">
<!--Left Sidebar Holder --> 
<?php include 'sections/left-sidebar.sec.php'; ?>

    <!-- Page Content Holder -->
    <div id="content">
        <?php include'sections/navigation.sec.php';
        if(!isset($_SESSION['utilId'])){
            $_SESSION['activityStatus'] = 'Hey ...Hmm. <br>I see you =) trying :))';
            header("Location: ..".$_SESSION['previousSessionUrl']."");
            exit();
        }
        echo'<div class="container text-center">
                <h1>Cosul Meu</h2>
            </div>';
        if(empty($_SESSION["cos"])){
            echo'<div class="container text-center">
                    <h2>Nu aveti nici un produs in cos</h2>
                    <a href="produse.php">vezi produsele din magazin</a>
                </div>';
        }
        if (!empty($_SESSION["cos"])) {
            $total= 0;
            echo '<table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th width="20%">Imagine</th>
                        <th width="40%">Denumire</th>
                        <th width="5%">Cantitate</th>
                        <th width="5%">Pret</th>
                        <th width="15%">Subtotal</th>
                        <th width="15%">Actiune</th>
                    </tr>
                </thead>';
            foreach($_SESSION["cos"] as $keys => $values){
                $subtotal = number_format($values['pret'] * $values['cantitate'],2);
                echo'<tr>
                        <td><img src="'.$values['image'].'" alt="'.$values['denumire'].'" width="100" height="100"></td>
                        <td class="align-middle"><h5>'.$values['denumire'].'</h5></td>
                        <td class="align-middle"><h5>'.$values['cantitate'].'</h5></td>
                        <td class="align-middle"><h5>'.$values['pret'].'</h5></td>
                        <td class="align-middle"><h5>'.$subtotal.'</h5></td>
                        <td class="align-middle"><a href="includes/cos.inc.php?action=delete&codProdus='.$values['codProdus'].'" class="btn btn-danger">Sterge</a></td>
                    </tr>';
                $total = number_format($total + $subtotal,2);
            };
            echo '<tr>  
                        <td class="align-middle"><a href="produse.php" class="btn btn-warning"> <<< Continua Cumparaturile </a></td>
                        <td colspan="2" class="align-middle"><a href="detalii-comanda.php" class="btn btn-success"> Finalizare Comanda >>> </a></td>
                        <td class="align-middle"><h3>Total</h3></td>
                        <td class="align-middle"><h3>'.$total.' Lei</h3></td>
                        <td class="align-middle"><a href="includes/cos.inc.php?action=empty" class="btn btn-danger">Golire Cos</a></td>
                    </tr>
                </table>'; 
        }
        ?>
    
<!----------------Footer----------->
<?php include 'sections/footer.sec.php'; ?>
    </div>
    <!--Right Sidebar Holder --> 
    <?php include 'sections/right-sidebar.sec.php' ?>
</body>
</html>