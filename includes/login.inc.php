<?php

if(isset($_POST['login-submit'])){
  session_start();

  require __DIR__.'/../includes/dbh.inc.php';

  $email = $_POST['email'];
  $parola = $_POST['parola'];

  //Method that checks empty fields and returns the email to login with the valid info autofilled
  if (empty($email) || empty($parola)) {
    $_SESSION['activityStatus'] = 'Logare incompletă ...<br> Toate câmpurile sunt obligatorii!';
    $_SESSION['tempemailName'] = $email;
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
  //Method that checks if the email exists in the database
  else {
    //SQL variable that runs an SQL statement to check the email
    $sql = "SELECT * FROM utilizatori WHERE emailUtil=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);

    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['activityStatus'] = 'Logare incompletă ...<br> A apărut o eroare de conexiune!';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }

    //Method that retrieves the email filled by the emails checks for duplicity with the database
    else {
      mysqli_stmt_bind_param($stmt,"s", $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($parola, $row['parolaUtil']);
        if ($pwdCheck == false) {
          $_SESSION['tempemailName'] = $email;
          $_SESSION['activityStatus'] = 'Logare incompletă ...<br> Parola introdusă este incorectă!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        elseif ($pwdCheck == true) {
          $_SESSION['utilId'] = $row['utilId'];
          $_SESSION['tipCont'] = $row['tipCont'];
          $_SESSION['numeUtil'] = $row['numeUtil'];
          $_SESSION['prenumeUtil'] = $row['prenumeUtil'];
          $_SESSION['adresaUtil'] = $row['adresaUtil'];
          $_SESSION['emailUtil'] = $row['emailUtil'];
          $_SESSION['activityStatus'] = 'Logare completă! Bine revenit, '.$row['numeUtil'].'! ';
          unset($_SESSION['tempemailName']);
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        else {
          $_SESSION['tempemailName'] = $email;
          $_SESSION['activityStatus'] = 'Logare incompletă ...<br> Parola introdusă este incorectă!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
      }
      else{
        $_SESSION['tempemailName'] = $email;
        $_SESSION['activityStatus'] = 'Logare incompletă ...<br> Numele de utilizator folosit nu exista in baza de date!';
        header("Location: ..".$_SESSION['currentSessionUrl'.""]);
        exit();
      }
    }
  }
}
else {
  $_SESSION['activityStatus'] = 'Hey ...Hmm. <br>I see you =) trying :))';
  header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  exit();
}
