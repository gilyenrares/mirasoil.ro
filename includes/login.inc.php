<?php

if(isset($_POST['login-submit'])){
  session_start();

  require __DIR__.'/../includes/dbh.inc.php';

  $user = $_POST['user'];
  $password = $_POST['pwd'];

  //Method that checks empty fields and returns the user to login with the valid info autofilled
  if (empty($user) || empty($password)) {
    $_SESSION['activityStatus'] = 'Logare incompletă ...<br> Toate câmpurile sunt obligatorii!';
    $_SESSION['tempUserName'] = $user;
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
   //Method that checks if the username entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$user)) {
    $_SESSION['tempUserName'] = $user;
    $_SESSION['activityStatus'] = 'Logare incompletă ...<br> Numele de utilizator este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the user exists in the database
  else {
    //SQL variable that runs an SQL statement to check the user
    $sql = "SELECT * FROM users WHERE userName=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);

    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['activityStatus'] = 'Logare incompletă ...<br> A apărut o eroare de conexiune!';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }

    //Method that retrieves the user filled by the users checks for duplicity with the database
    else {
      mysqli_stmt_bind_param($stmt,"s", $user);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['userPwd']);
        if ($pwdCheck == false) {
          $_SESSION['tempUserName'] = $user;
          $_SESSION['activityStatus'] = 'Logare incompletă ...<br> Parola introdusă este incorectă!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        elseif ($pwdCheck == true) {
          $_SESSION['userId'] = $row['userId'];
          $_SESSION['accType'] = $row['accType'];
          $_SESSION['repPoints'] = $row['repPoints'];
          $_SESSION['userName'] = $row['userName'];
          $_SESSION['userEmail'] = $row['userEmail'];
          $_SESSION['activityStatus'] = 'Logare completă! Bine revenit, '.$row['userName'].'! ';
          unset($_SESSION['tempUserName']);
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        else {
          $_SESSION['tempUserName'] = $user;
          $_SESSION['activityStatus'] = 'Logare incompletă ...<br> Parola introdusă este incorectă!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
      }
      else{
        $_SESSION['tempUserName'] = $user;
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
