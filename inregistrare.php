<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Inregistrare</title>
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
	<div class="container content-cont">
		<div class="d-flex justify-content-center">
			<div class="card card-cont">
				<div class="card-header">
					<h3>Sign Up</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><a href="https:/www.facebook.com/mirasoil16/"><i class="fab fa-facebook-square"></i></a></span>
						<span><a href="https://g.page/mirasoil16"><i class="fab fa-google-plus-g"></i></a></span>
						<span><a href="https:/www.instagram.com/mirasoil16/"><i class="fab fa-instagram-square"></i></a> </span>
					</div>
				</div>
				<div class="card-body">
					<form action="includes/signup.inc.php" method="POST">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="text" name="email" class="form-control" placeholder="Email...">	
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="nume" class="form-control" placeholder="Nume...">	
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-user"></i></span>
							</div>
							<input type="text" name="prenume" class="form-control" placeholder="Prenume...">	
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-address-card"></i></span>
							</div>
							<input type="text" name="adresa" class="form-control" placeholder="Adresa...">	
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="parola" class="form-control" placeholder="Parola...">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="repetaParola" class="form-control" placeholder="Repeta Parola...">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox" name="termeni" required="required">Sunt de acord cu <a href="#">Termenii si Conditile MiraSoil.ro</a> 
						</div>
						<div class="form-group">
							<button type="submit" name="signup-submit" class="btn btn-primary float-right px-5" data-toggle="modal" data-target="#errorsystem">Inregistrare</button>
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Ai deja un cont? <a href="logare.php">Logeaza-te</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="resetare-parola.php">Forgot your password?</a>
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