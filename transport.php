<!DOCTYPE html>
<html lang="ro">

<head>
	<title>Transport</title>
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

         <div id="transport">
         	<div class="columns-container">
				<div id="columns" class="container">
					<div class="row">
						<div id="center_column" class="center_column col-xs-12 col-sm-12">
						<article class="rte">
						<h1 class="page-heading bottom-indent">Expediere și livrare colete</h1>
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<div class="cms-block">
									<h3 class="page-subheading" id="romania">Taxe de expediere și livrare - România</h3>
									<p><strong class="dark">Pe teritoriul României expediem gratuit comenzile cu produse în valoare <strong>peste 200 de lei*</strong>.</strong></p>
									<p class="expediere"><i class="fas fa-truck"></i><span> </span>Expediere în 1-3 zile lucrătoare</p>
									<p>Pentru orice comandă sub 200 lei, taxa de expediere a coletului este <strong>25 lei</strong> (cu TVA inclus).</p>
									<p>În județul Alba, pentru comenzi sub 200 lei, taxa de expediere este <strong>9 lei </strong>(cu TVA inclus).</p>
									<p>Pentru expedierea coletelor folosim companiile de curierat rapid GLS și FanCourier.<br />În perioadele cu reduceri speciale sau de sărbători, livrările pot să dureze 2-3 zile sau chiar mai mult.</p>
									<p>*Aceste taxe de expediere standard nu se aplică pentru comenzile speciale sau cele cu un volum/greutate foarte mare.</p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="cms-box">
									<h3 class="page-subheading">Unde este comanda mea?</h3>
									<p><strong class="dark">Pe viitor - verificați statusul comenzii</strong></p>
									<p>Din diverse motive este posibil ca livrarea coletului să întârzie. Puteți verifica oricând statusul comenzii accesând <strong><a href="cont.php">contul de client</a></strong> de pe site-ul nostru.</p>
									<p>Dacă au trecut cel puțin 3 zile lucrătoare de la efectuarea comenzii și nu ați primit coletul sau nu ați fost contactat de curier, vă rugăm să ne contactați telefonic, prin rubrica de contact sau prin email. </p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="cms-box">
								<h3 class="page-subheading">Suport Clienți</h3>
								<p><strong class="dark">Dacă nu sunt la adresa livrării ce se întâmplă?</strong></p>
								<p>În ziua livrării coletului, curierul vă contactează cu câteva ore înainte, de regulă telefonic. Dacă nu răspundeți și/sau nu vă găsește la adresă, coletul se va păstra în depozitul curierului aproximativ 7 zile. Puteți lua legătura cu compania de curierat sau ne puteți contacta telefonic sau prin rubrica de <a href="index.php#contact">contact</a> pentru a stabili o nouă livrare.</p>
								<p><strong class="dark">Cum livrați comenzile speciale?</strong></p>
								<p>Comenzile speciale sunt acele comenzi care conțin o cantitate mare de produse sau la volume care nu sunt disponibile pri comandă on-line direct de pe site. Costul de transport și termenul de livrare se stabilesc individual pentru aceste comenzi, echipa de suport clienți vă stă la dispoziție telefonic, prin email sau rubrica de contact.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4"></div>
					</article>
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
   
    <script src="js/prelucrare.js"></script>
</body>

</html>