<!DOCTYPE html>
<html lang="ro">
<header>
	<title>Info</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="...">
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>

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
						<h1 class="page-heading bottom-indent">Informații utile clienți</h1>
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<div class="cms-block">
									<h3 class="page-subheading" id="romania">Metoda de livrare-detalii importante</h3>
									<p><strong class="dark">Momentan, toate comenzile procesate online se achită <strong>ramburs la curier</strong>.</strong></p>
							
									<p>Comenzile sunt procesate telefonic, la adresa de email <a href="mailto:contact@mirasoil.ro">contact@mirasoil.ro</a> sau prin mesaj privat pe pagina de facebook pe care o găsiți <a href="https://www.facebook.com/mirasoil16/">aici</a>.</p>
									<p>În județul Alba, pentru comenzi sub 200 lei, taxa de expediere este de <strong>10 lei </strong>.</p>
									<p>Pentru expedierea coletelor folosim companiile de curierat rapid GLS și FanCourier.<br /></p>
									<p>*Având în vedere numărul mic de comenzi procesate online, suntem obligați să calculăm costul transportului pentru fiecare comandă în parte, fapt pentru care vă încurajăm să ne contactați telefonic sau la <a href="index.php#contact">adresa de email</a>.</p>
									<p>*Companiile de curierat sunt contactate în ziua în care doriți să achiziționați produse de la noi, exceptând zilele de sâmbătă și duminică, neavând un contact în prealabil cu acestea în momentul de față. </p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="cms-box">
									<h3 class="page-subheading">Întrebări frecvente</h3>
									<p><strong class="dark">În această secțiune vor fi postate toate întrebările dumneavoastră</strong></p>
									<p>Cu ajutorul acestor întrebări încercăm să îmbunătățim calitatea vizitei dumneavoastră pe pagina noastră!<strong></strong> </p>
									<form method = "post" action = "#">
									<p>Postați întrebarea dumneavoastră:</p>
										<p><textarea rows="4" cols="40" name="question">Introduceți întrebarea aici..</textarea></p>
										<br>
										<p><input type = "submit"></p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="cms-box">
								<h3 class="page-subheading">Ai comandat un produs de la noi ?</h3>
								<p><strong class="dark">Lasă-ne un review !</strong></p>
								<p>Ne dorim să aflăm părerea ta despre experiența cu produsele noastre. Fie că ești mulțumit sau ai anumite nemulțumiri, noi te încurajăm să îți exprimi părerea pentru a-i ajuta și pe ceilalți să își formeze o impresie !</p>
								<ul>
								<li><p>Transmite-ne motivul pentru care ți-a plăcut/displăcut un produs</p></li>
								<li><p>Spune-ne ce am putea îmbunătăți</p></li>
								<li><p>Împărtășește cu noi motivul pentru care ai recomanda produsele și altor clienți</p></li>
							    </ul>
								<p><strong class="dark">Există situații în care review-urile pot fi respinse din cauza mai multor motive:</strong></p>
								<ul>
									<li><p>limbaj neadecvat</p></li>
									<li><p>folosirea datelor personale-evită includerea informațiilor legate de nume, adresă, număr de telefon, etc.</p></li>
									<li><p>detalii ce nu țin de produse - pentru acestea te rugăm să ne contactezi în <a href="index.php#contact">privat</a> </p></li>
								</ul>
								<p><i>Site-ul este încă în construcție, de aceea vă recomandăm verificarea periodică a acestuia pentru a fi la curent cu noutățile.</i></p>
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
<!--Script-->
<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
         $(document).ready(function () {
            $('#sidebarCollapseRight').on('click', function () {
                $('#sidebar-right').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>   
    <script src="js/prelucrare.js"></script>
</body>

</html>