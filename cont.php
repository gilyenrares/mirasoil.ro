<!DOCTYPE html>
<html lang="ro">
<header>
	<title>Cont</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="...">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script type="text/javascript" src="js/main.js"></script>    
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

         <div class="container content-cont">
	<div class="d-flex justify-content-center">
		<div class="card card-cont">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><a href="https:/www.facebook.com/mirasoil16/"><i class="fab fa-facebook-square"></i></a></span>
					<span><a href="https://g.page/mirasoil16"><i class="fab fa-google-plus-square"></i></a></span>
					<span><a href="https:/www.instagram.com/mirasoil16/"><i class="fab fa-instagram-square"></i></a> </span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
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