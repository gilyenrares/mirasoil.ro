<?php
if (isset($_POST['details-update-submit'])) {
  session_start();

  require 'dbh.inc.php';
  $tempId = $_SESSION['utilId'];
  $email = $_POST['email'];
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $adresa = $_POST['adresa'];
  $parola = $_POST['parola'];

//Method that checks empty fields and returns the user to signup with the valid info autofilled
  if (empty($email) || empty($nume) || empty($prenume) || empty($adresa) || empty($parola)) {
    $_SESSION['activityStatus'] = 'Actualizare incompletă ...<br> Toate câmpurile sunt obligatorii!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the First Name entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$nume)) {
    $_SESSION['activityStatus'] = 'Actualizare incompletă ... <br> Numele introdus este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the First Name entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$prenume)) {
    $_SESSION['activityStatus'] = 'Actualizare incompletă ... <br> Prenumele introdus este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the First Name entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s,.-]*$/",$adresa)) {
    $_SESSION['activityStatus'] = 'Actualizare incompletă ... <br> Adresa introdusa este invalida!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the Email entered is valid and returns the user to signup with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['activityStatus'] = 'Actualizare incompletă ... <br> Email-ul introdus este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the email exists in the database
  else {
    //SQL variable that runs an SQL statement to check the email
    $sql = "UPDATE utilizatori SET numeUtil = ?, prenumeUtil =?, adresaUtil =?, email=? WHERE utilId = $tempId";

        //Prepare statement initialization
        $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          $_SESSION['activityStatus'] = 'Actualizare incompletă ... <br> A apărut o eroare de *conexiune!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        //Method that retrieves the input from users and uploads it to the database
        else {
          //Variable that holds the hassed parola
          $hashedPwd = password_hash($parola, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"sssss", $nume, $prenume, $adresa, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          $_SESSION['activityStatus'] = 'Actualizare completă ! <br> Actualizarea va fi vizibila la urmatoarea conectare';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
      }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  $_SESSION['activityStatus'] = 'Hey ...Hmm. <br>I see you =) trying :))';
  header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  exit();
}
