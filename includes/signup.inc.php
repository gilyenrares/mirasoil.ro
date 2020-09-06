<?php
if (isset($_POST['signup-submit'])) {
  session_start();

  require 'dbh.inc.php';

  $email = $_POST['email'];
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $adresa = $_POST['adresa'];
  $parola = $_POST['parola'];
  $repetaParola = $_POST['repetaParola'];

//Method that checks empty fields and returns the user to signup with the valid info autofilled
  if (empty($email) || empty($nume) || empty($prenume) || empty($adresa) || empty($parola) || empty($repetaParola)) {
    $_SESSION['tempnume'] = $nume;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['activityStatus'] = 'Înregistrare incompletă ...<br> Toate câmpurile sunt obligatorii!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }

  //Method that checks if the First Name entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$nume)) {
    $_SESSION['tempnume'] = $nume;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Numele introdus este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the First Name entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$prenume)) {
    $_SESSION['tempnume'] = $nume;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Prenumele introdus este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the First Name entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s,.-]*$/",$adresa)) {
    $_SESSION['tempnume'] = $nume;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Adresa introdusa este invalida!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }

  //Method that checks if the Email entered is valid and returns the user to signup with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['tempnume'] = $nume;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Email-ul introdus este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }

  //Method that checks if the parola and Re-enter parola are the same
elseif ($parola !== $repetaParola) {
  $_SESSION['tempnume'] = $nume;
  $_SESSION['tempEmail'] = $email;
  $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Parolele introduse nu se potrivesc!';
  header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  exit();
}
//Method that checks if the password entered is valid and returns the user to signup with the valid info autofilled
elseif (!preg_match("/^[a-zA-Z0-9\s£$%&*~#@?(){}[];:+=_,.-]*$/",$parola)) {
  $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Parola introdusa este invalida!';
  header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  exit();
}

  //Method that checks if the email exists in the database
  else {
    //SQL variable that runs an SQL statement to check the email
    $sql = "SELECT emailUtil FROM utilizatori WHERE emailUtil=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['tempnume'] = $nume;
      $_SESSION['tempEmail'] = $email;
      $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> A apărut o eroare de conexiune!';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }
    //Method that retrieves the email filled by the users checks for duplicity with the database
    else {
      mysqli_stmt_bind_param($stmt,"s",$email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        $_SESSION['tempnume'] = $nume;
        $_SESSION['tempEmail'] = $email;
        $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Email-ul introdus este inregistrat deja!';
        header("Location: ..".$_SESSION['currentSessionUrl'.""]);
        exit();
      }
      else {
        //SQL variable that runs an SQL statement to insert data into the database
        $sql = "INSERT INTO utilizatori (numeUtil, prenumeUtil, adresaUtil, emailUtil, parolaUtil ) VALUES(?, ?, ?, ?, ?);";

        //Prepare statement initialization
        $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          $_SESSION['tempnume'] = $nume;
          $_SESSION['tempEmail'] = $email;
          $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> A apărut o eroare de *conexiune!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        //Method that retrieves the input from users and uploads it to the database
        else {
          //Variable that holds the hassed parola
          $hashedPwd = password_hash($parola, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"sssss", $nume, $prenume, $adresa, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          unset($_SESSION['tempnume']);
          unset($_SESSION['tempEmail']);
          $_SESSION['activityStatus'] = 'Înregistrare completă !';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
      }
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
