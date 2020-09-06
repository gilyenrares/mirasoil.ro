<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Info</title>
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

         <div id="checkout">
            <h3>Sumar comanda</h3>
            <!--detalii comanda existente in sesiune -->
            <?php
            
            //checkout form nu exista daca cosul este gol, deci if(empty) nu este necesar
            //if(empty($_SESSION["cos"])){
            //echo'<div class="container text-center">
            //        <h2>Nu aveti nici un produs in cos</h2>
            //        <a href="produse.php">vezi produsele din magazin</a>
            //    </div>';
            //}
        if (!empty($_SESSION["cos"])) {
            $total= 0;
            echo '<table class="table table-striped">
                <thead>
                    <tr>
                        <th width="20%">Imagine</th>
                        <th width="40%">Denumire</th>
                        <th width="5%">Cantitate</th>
                        <th width="10%">Pret</th>
                        <th width="10%">Subtotal</th>
                        <th width="15%">Actiune</th>
                    </tr>
                </thead>';
            foreach($_SESSION["cos"] as $keys => $values){
                $subtotal = number_format($values['pret'] * $values['cantitate'],2);
                echo'<tr>
                        <td><img src="'.$values['image'].'" alt="'.$values['denumire'].'" width="100" height="100"></td>
                        <td><h5>'.$values['denumire'].'</h5></td>
                        <td><h5>'.$values['cantitate'].'</h5></td>
                        <td><h5>'.$values['pret'].'</h5></td>
                        <td><h5>'.$subtotal.'</h5></td>
                        <td><a href="includes/cos.inc.php?action=delete&codProdus='.$values['codProdus'].'" class="btn btn-danger">Sterge</a></td>
                    </tr>';
            $total += $subtotal;
            };
            echo '<tr>
                        <td colspan="3"></td>
                        <td><h3>Total</h3></td>
                        <td><h3>'.$total.' Lei</h3></td>
                        <td><a href="includes/cos.inc.php?action=empty" class="btn btn-danger">Golire Cos</a></td>
                    </tr>
                </table>'; 
        }
        ?>
<!--Forum adresa existenta in baza de date-->
            <h3 class="checkout-info">Informatii comanda</h3>
            <div class="row">
                <div class="col">
                    <h5>Adresa de facturare</h5>
                    <div class="form-group">
                                <div class="col-md-12">
                                <div class="col-md-12">
                                    Nume
                                </div>
                                <div class="col-md-12">
                                    Prenume
                                </div>
                                    <input type="text" name="address" class="form-control1" value=".$_SESSION['adresa']." disabled />
                                </div>
                                <div class="col-md-12">
                                    Nr. tel
                                </div>
                                <div class="col-md-12">
                                    Email
                                </div>
                            </div>                    
                </div>
<!--Modificarea adresei de livrare-->
                <div class="col">
                    <h5>Adresa de livrare</h5>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Adresa de livrare corespunde cu adresa de facturare</label><br>
                    <div class="btn-group btn-group-lg m-2 d-flex" role="group" aria-label="Toolbar">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#prop" aria-expanded="true" aria-controls="prop">Livrare la o adresa diferita</button>
                    </div>
                    <div class="accordion m-2" id="subinterface">
                    <div class="card bg-transparent collapse show" id="prop" area-labelledby="new-address" data-parent="#subinterface">
                    <div class="form-group">
                        <div class="form-group">
                                <div class="col-md-12"><strong>Strada:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="strada" class="form-control1" value="" />
                                </div>
                            </div>
                                <div class="col-md-12"><strong>Localitate:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="localitate" class="form-control1" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Judet:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="judet" class="form-control1" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Cod Postal:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="codPostal" class="form-control1" value="" />
                                </div>
                            </div>  
                            <div class="btn btn-success">Salveaza adresa </div>
                        </div>
                    </div>
                </div>
            </div>
<!--Formular-datele cardului -->
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="bg-white rounded-lg shadow-sm p-5">
        <!-- Credit card form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                                <li class="nav-item">
                                <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                    <i class="fa fa-credit-card"></i>
                                    Credit Card
                                </a>
                                </li>
                                <li class="nav-item">
                                <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                    <i class="fab fa-paypal"></i>
                                    Paypal
                                </a>
                                </li>
                                <li class="nav-item">
                                <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                    <i class="fa fa-university"></i>
                                    Transfer Bancar
                                </a>
                                </li>
                            </ul>
        <!-- Credit card form content -->
        <div class="tab-content">

          <!-- credit card info-->
          <div id="nav-tab-card" class="tab-pane fade show active">
            <p class="alert alert-success">Continuati plata</p>
            <form role="form">
              <div class="form-group">
                <label for="username">Numele Detinatorului</label>
                <input type="text" name="username" placeholder="Popescu Alin" required class="form-control">
              </div>
              <div class="form-group">
                <label for="cardNumber">Numarul cardului</label>
                <div class="input-group">
                  <input type="text" name="cardNumber" placeholder="Numar card" class="form-control" required>
                  <div class="input-group-append">
                    <span class="input-group-text text-muted">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label><span class="hidden-xs">Data expirarii</span></label>
                    <div class="input-group">
                      <input type="number" placeholder="Luna" name="" class="form-control" required>
                      <input type="number" placeholder="Anul" name="" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group mb-4">
                    <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                            <i class="fa fa-question-circle"></i>
                    </label>
                    <input type="text" required class="form-control">
                  </div>
                </div>



              </div>
              <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
            </form>
          </div>

          <!-- Paypal info -->
          <div id="nav-tab-paypal" class="tab-pane fade">
            <p>Paypal este cea mai usoara modalitate de a plati online</p>
            <p>
              <button type="button" class="btn btn-primary rounded-pill"><i class="fa fa-paypal mr-2"></i> Intra in contul tau PayPal</button>
            </p>
          </div>

          <!-- bank transfer info -->
          <div id="nav-tab-bank" class="tab-pane fade">
            <h6>Detalii transfer bancar</h6>
            <dl>
              <dt>Banca</dt>
              <dd> TRANSILVANIA</dd>
            </dl>
            <dl>
              <dt>Numar cont</dt>
              <dd>7775877975</dd>
            </dl>
            <dl>
              <dt>IBAN</dt>
              <dd>ROxxBTRLRONCRTxxxxxxxxxx</dd>
            </dl>
            <p class="text-muted">Pentru aceasta optiune se percepe un comision fix de 5 lei pentru fiecare transfer.
            </p>
          </div>
      </div>
  </div>
</div>
</div>
</div>


<!----------------Footer----------->
<?php include 'sections/footer.sec.php'; ?>
</div>
<!--Right Sidebar Holder --> 
<?php include 'sections/right-sidebar.sec.php' ?>
</body>
</html>