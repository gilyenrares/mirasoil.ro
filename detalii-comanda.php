<!DOCTYPE html>
<html>
<head>
    <title>Detalii Comanda</title>
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
<?php include 'sections/left-sidebar.sec.php';?>
    <!-- Page Content Holder -->
    <div id="content">
        <?php 
            include'sections/navigation.sec.php'; 
            if(!isset($_SESSION['utilId'])){
                $_SESSION['activityStatus'] = 'Hey ...Hmm. <br>I see you =) trying :))';
                header("Location: ..".$_SESSION['currentSessionUrl']."");
                exit();
            }
        ?>
        <div class="container">
            <div class="py-5 text-center">
                <h2>Detalii Comanda</h2>
                <p class="lead">.</p>
            </div>

            <div class="row">
                <!-- Sectiunea Cosul Meu si Adresa facturare -->
                <div class="col-md-4 order-md-2 mb-2">
                    <?php include 'sections/cos-min.sec.php'; ?>  
                </div>
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate>
                    <!-- Sectiunea Adresa de Livrare -->
                    <h4 class="mb-3">Adresa livrare</h4><hr>
                    <div class="card p-2 mb-3 shadow-sm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Prenume</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Prenume" value="<?php echo $_SESSION['prenumeUtil']; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Nume</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Nume" value="<?php echo $_SESSION['numeUtil']; ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" value="<?php echo $_SESSION['emailUtil']; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="tel">Număr de telefon</label>
                                <input type="email" class="form-control" id="tel" placeholder="07xxxxxxxx" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Adresa</label>
                            <textarea class="form-control" id="address" rows="3" required><?php echo $_SESSION['adresaUtil']; ?></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="state">Judet</label>
                                <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Alege...</option>
                                <option>Bucuresti</option>
                                <option>Alba</option>
                                <option>Arad</option>
                                <option>Arges</option>
                                <option>Bacau</option>
                                <option>Bihor</option>
                                <option>Bistrita-Nasaud</option>
                                <option>Botosani</option>
                                <option>Brasov</option>
                                <option>Braila</option>
                                <option>Buzau</option>
                                <option>Caras-Severin</option>
                                <option>Calarasi</option>
                                <option>Cluj</option>
                                <option>Constanta</option>
                                <option>Covasna</option>
                                <option>Dambovita</option>
                                <option>Dolj</option>
                                <option>Galati</option>
                                <option>Giurgiu</option>
                                <option>Gorj</option>
                                <option>Harghita</option>
                                <option>Hunedoara</option>
                                <option>Ialomita</option>
                                <option>Iasi</option>
                                <option>Ilfov</option>
                                <option>Maramures</option>
                                <option>Mehedinti</option>
                                <option>Mures</option>
                                <option>Neamt</option>
                                <option>Olt</option>
                                <option>Prahova</option>
                                <option>Satu Mare</option>
                                <option>Salaj</option>
                                <option>Sibiu</option>
                                <option>Suceava</option>
                                <option>Teleorman</option>
                                <option>Timis</option>
                                <option>Tulcea</option>
                                <option>Valcea</option>
                                <option>Vaslui</option>
                                <option>Vrancea</option>
                                </select>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="country">Localitate</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Adresa de livrare este aceeasi cu adresa de facturare</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Salveaza informatia pentru mai tarziu</label>
                        </div>
                    </div>
                    <!-- Sectiunea Adresa de Livrare -->
                    <h4 class="mb-3">Detalii plata</h4><hr>
                    <div class="card p-2 mb-3 shadow-sm">
                        <!--Formular-datele cardului -->
                        <div class="row m-0">
                            <div class="bg-white rounded-lg  ">
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
                                <li class="nav-item">
                                <a data-toggle="pill" href="#nav-tab-ramburs" class="nav-link rounded-pill">
                                    <i class="fas fa-money-bill-alt"></i>
                                    Ramburs
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
                    <button type="button" class="btn btn-primary rounded-pill"><i class="fab fa-cc-paypal"></i> Intra in contul tau PayPal</button>
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
                <div id="nav-tab-ramburs" class="tab-pane fade">
                    <input type="checkbox" id="ramburs" name="ramburs" value="ramburs">
                        <label for="vehicle1"> Plata se va efectua ramburs la livrare</label><br>
                </div>
            </div>
    </div>
</div>

                </div>
               
                
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Plasati comanda</button>
            </form>
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