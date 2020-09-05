<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Cont</title>
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
<div class="container">
    <h3>Contul Meu</h3>
    <form action="includes/signup.inc.php" method="POST">
        <div class="row">
            <div class="col input-group form-group" id="Nume">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <span class="input-group-text">Nume</span>
                </div>
                <input type="text" name="nume" value="<?php echo $_SESSION['numeUtil']; ?>" id="Nume" class="form-control" aria-describedby="noteN" placeholder="Nume...">	
            </div>
            <div class="col input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-user"></i></span>
                    <span class="input-group-text">Prenume</span>
                </div>
                <input type="text" name="prenume" value="<?php echo $_SESSION['prenumeUtil']; ?>" class="form-control" placeholder="Prenume...">	
            </div>
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                <span class="input-group-text">Adresa</span>
            </div>
            <input type="text" name="adresa" value="<?php echo $_SESSION['adresaUtil']; ?>" class="form-control" placeholder="Adresa...">	
        </div>
        <div class="row">
            <div class="col input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <span class="input-group-text">Email</span>
                </div>
                <input type="text" name="email" value="<?php echo $_SESSION['emailUtil']; ?>" class="form-control" placeholder="Email...">	
            </div>
            <div class="col input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <span class="input-group-text">Parola</span>
                </div>
                <input type="password" name="parola" class="form-control" placeholder="Parola...">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="signup-submit" class="btn btn-primary px-5" data-toggle="modal" data-target="#errorsystem">Aplică Modificările</button>
        </div>
    </form>
</div>

<!----------------Footer----------->
<?php include 'sections/footer.sec.php'; ?>
</div>
<!--Right Sidebar Holder -->
<?php include 'sections/right-sidebar.sec.php' ?>
</body>
</html>