<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Logare</title>
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
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><a href="https:/www.facebook.com/mirasoil16/"><i class="fab fa-facebook-square"></i></a></span>
						<span><a href="https://g.page/mirasoil16"><i class="fab fa-google-plus-g"></i></a></span>
						<span><a href="https:/www.instagram.com/mirasoil16/"><i class="fab fa-instagram-square"></i></a> </span>
					</div>
				</div>
				<div class="card-body">
					<form action="includes/login.inc.php" method="POST">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control" placeholder="Email...">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="parola" class="form-control" placeholder="Parola...">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<button type="submit" name="login-submit" class="btn btn-primary float-right px-5" data-toggle="modal" data-target="#errorsystem">Logare</button>
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="inregistrare.php">Sign Up</a>
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