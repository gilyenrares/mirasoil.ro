<?php
if (isset($_POST['signup-submit'])) {
  session_start();

  require __DIR__.'/../includes/dbh.inc.php';

  $userName = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

//Method that checks empty fields and returns the user to signup with the valid info autofilled
  if (empty($userName) || empty($email) || empty($password) || empty($passwordRepeat)) {
    $_SESSION['tempUserName'] = $userName;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['activityStatus'] = 'Înregistrare incompletă ...<br> Toate câmpurile sunt obligatorii!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }

  //Method that checks if the First Name entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$userName)) {
    $_SESSION['tempUserName'] = $userName;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Numele de utilizator este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }

  //Method that checks if the Email entered is valid and returns the user to signup with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['tempUserName'] = $userName;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Email-ul introdus este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }

  //Method that checks if the Password and Re-enter Password are the same
elseif ($password !== $passwordRepeat) {
  $_SESSION['tempUserName'] = $userName;
  $_SESSION['tempEmail'] = $email;
  $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Parolele introduse nu se potrivesc!';
  header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  exit();
}

  //Method that checks if the email exists in the database
  else {
    //SQL variable that runs an SQL statement to check the email
    $sql = "SELECT userEmail FROM users WHERE userEmail=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['tempUserName'] = $userName;
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
        $_SESSION['tempUserName'] = $userName;
        $_SESSION['tempEmail'] = $email;
        $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> Email-ul introdus este inregistrat deja!';
        header("Location: ..".$_SESSION['currentSessionUrl'.""]);
        exit();
      }
      else {
        //SQL variable that runs an SQL statement to insert data into the database
        $sql = "INSERT INTO users (userName, userEmail, userPwd) VALUES(?, ?, ?);";

        //Prepare statement initialization
        $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          $_SESSION['tempUserName'] = $userName;
          $_SESSION['tempEmail'] = $email;
          $_SESSION['activityStatus'] = 'Înregistrare incompletă ... <br> A apărut o eroare de *conexiune!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        //Method that retrieves the input from users and uploads it to the database
        else {
          //Variable that holds the hassed Password
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"sss", $userName, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          unset($_SESSION['tempUserName']);
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
