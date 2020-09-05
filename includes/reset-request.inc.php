<?php 
if (isset($_POST['reset-request-submit'])) {
	 session_start();
	// Selector
	$selector = bin2hex(random_bytes(8));
	//	Token
	$token = random_bytes(32);
	// Url for the reset password page
	$url = "https://mirasoil.ro/parola-noua.php?selector=". $selector. "&validator=". bin2hex($token);
	// Life of token 600 sec or 10 min
	$expires = date("U") + 600;

	require 'dbh.inc.php';
	$userEmail = $_POST["email"];
	//Sql statement to delete any unused token connected to the current user 
	$sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		$_SESSION['activityStatus'] = 'Cerere incompletă ...<br> A apărut o eroare de conexiune!';
      	header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      	exit();
	} else{
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
	}
	// Sql statement that applies a selector, token and expiration date to the user account 
	$sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		$_SESSION['activityStatus'] = 'Cerere incompletă ...<br> A apărut o eroare de inregistrare a cereri !';
      	header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      	exit();;
	} else{
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	$to = $userEmail;
	$subject = 'Resetează parola pentru MiraSoil.ro';

	$message = "Am primit o solicitare de resetare a parolei. Linkul pentru resetarea parolei este mai jos.\r\n Dacă nu ați făcut această solicitare, puteți ignora acest e-mail.\r\n";
	$message .= "Acesta este linkul de resetare a parolei:\r\n";
	$message .= $url;

	$headers = "From: no-reply@mirasoil.ro\r\n";
	$headers .= "Reply-to: contact@mirasoil.ro\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();

	mail($to, $subject, $message, $headers);
	$_SESSION['activityStatus'] = 'Cerere trimisă ... <br> Un email a fost trimis cu instructiunile de resetare a parolei!';
    header("Location: ..".$_SESSION['previousSessionUrl'].""]);
}
else {
	header("Location: ../index.php");
	exit();
}