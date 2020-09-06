<?php
if (isset($_POST['update-info-submit'])) {
  session_start();

  require 'dbh.inc.php';
  $tempId = $_SESSION['utilId'];
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $adresa = $_POST['adresa'];
  $parola = $_POST['parola'];

//Method that checks empty fields and returns the user to signup with the valid info autofilled
  if ( empty($nume) || empty($prenume) || empty($adresa) || empty($parola)) {
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
  //Method that checks if the address entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s,.-]*$/",$adresa)) {
    $_SESSION['activityStatus'] = 'Actualizare incompletă ... <br> Adresa introdusa este invalida!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the password entered is valid and returns the user to signup with the valid info autofilled
// Between start -> 
// And end -> $
// of the string there has to be at least one number -> (?=.*\d)
// and at least one letter -> (?=.*[A-Za-z])
// and it has to be a number, a letter or one of the following: !@#$% -> [0-9A-Za-z!@#$%]
// and there have to be 4-32 characters -> {8,12}
  elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{4,32}$/',$parola)) {
    $_SESSION['activityStatus'] = 'Actualizare incompletă ... <br> Parola introdusa este invalida!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the email exists in the database
  else {
    //SQL variable that runs an SQL statement to check the email
    $sql = "UPDATE utilizatori SET numeUtil = ?, prenumeUtil =?, adresaUtil =?, parolaUtil=? WHERE utilId = '$tempId'";

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
          mysqli_stmt_bind_param($stmt,"ssss", $nume, $prenume, $adresa, $hashedPwd);
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
