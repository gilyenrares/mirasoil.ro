<?php 

if (isset($_POST["reset-password-submit"])) {
	$selector = $_POST['selector'];
	$validator = $_POST['validator'];
	$password = $_POST["pwd"];
	$passwordRepeat = $_POST["pwd-repeat"];

	if (empty($password) || empty($passwordRepeat)) {
		header("Location ../parola-noua.php?newpwd=empty");
		exit();
	}elseif ($password != $passwordRepeat) {
		header("Location ../parola-noua.php?newpwd=pwdnotsame");
		exit();
	}

	$currentDate = date("U");
	require 'dbh.inc.php';
	$sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >= ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error!";
		exit();
	} else{
		mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if (!$row = mysqli_fetch_assoc($result)) {
			echo "You need to re-submit your reset request.(select) ";
			exit();
		} else {
			$tokenBin = hex2bin($validator);
			$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
			if ($tokenCheck === false) {
			 	echo "You need to re-submit your reset request. ";
				exit();
			} elseif ($tokenCheck === true) {
				$tokenEmail = $row["pwdResetEmail"];
				$sql ="SELECT * FROM utilizatori WHERE emailUtil=?;"; 
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "There was an error.";
					exit();
				} else{
					mysqli_stmt_bind_param($stmt, "s",$tokenEmail);
					mysqli_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					if (!$row = mysqli_fetch_assoc($result)) {
						echo "Ther was an error.";
						exit();
					} else{
						$sql = "UPDATE utilizatori SET parolaUtil=? WHERE emailUtil=?;";
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
							echo "There was an error!";
							exit();
						} else{
							$newPwdHash = password_hash($password, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt, "ss",$newPwdHash, $tokenEmail);
							mysqli_execute($stmt);
							$sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
							$stmt = mysqli_stmt_init($conn);
							if (!mysqli_stmt_prepare($stmt, $sql)) {
								echo "There was an error, but your password has ben succesfuly changed";
								exit();
							} else{
								mysqli_stmt_bind_param($stmt, "s", $userEmail);
								mysqli_stmt_execute($stmt);
								header("Location: ../index.php?newpassword=passwordUpdated");
							}
						}
					}
				}	
			} else{
				header("Location ../parola-noua.php?token=error");
			}
		}
	}
}
else{
	header("Location ../index.php");
}
