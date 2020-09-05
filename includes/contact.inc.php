<?php
if (isset($_POST['contact-submit'])) {
  session_start();

  require 'dbh.inc.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['message'];

//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($name) || empty($email) || empty($phone) || empty($msg)) {
    $_SESSION['tempName'] = $name;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['tempPhone'] = $phone;
    $_SESSION['tempMsg'] = $msg;
    $_SESSION['activityStatus'] = 'Trimiterea mesajului este incompletă ... <br> Toate câmpurile sunt obligatorii !';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the Email entered is valid and returns the user to contact with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['tempName'] = $name;
    $_SESSION['tempPhone'] = $phone;
    $_SESSION['tempMsg'] = $msg;
    $_SESSION['activityStatus'] = 'Trimiterea mesajului este incompletă ... <br> Emailul introdus nu este valid !';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
    //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s.,?!()]*$/",$msg)) {
    $_SESSION['tempName'] = $name;
    $_SESSION['tempEmail'] = $email;
    $_SESSION['tempPhone'] = $phone;
    $_SESSION['activityStatus'] = 'Trimiterea mesajului este incompletă ... <br> Mesajul introdus conține caractere restricționate !';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();;
  }
    elseif (!preg_match("/^[a-zA-Z\s]*$/",$name)) {
    $_SESSION['tempEmail'] = $email;
    $_SESSION['tempPhone'] = $phone;
    $_SESSION['tempMsg'] = $msg;
    $_SESSION['activityStatus'] = 'Trimiterea mesajului este incompletă ... <br> Numele introdus conține caractere restricționate ! !';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  elseif (!preg_match("/^[0-9]*$/",$phone)) {
    $_SESSION['tempName'] = $name;
     $_SESSION['tempEmail'] = $email;
    $_SESSION['tempMsg'] = $msg;
    $_SESSION['activityStatus'] = 'Trimiterea mesajului este incompletă ... <br> Numărul de telefon introdus conține caractere restricționate ! !';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  else {
    //SQL variable that runs an SQL statement to insert data into the database
    $sql = "INSERT INTO contact (nume, phone, email, message) VALUES(?, ?, ?, ?)";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);

    //Method that check if the sql statement can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['tempName'] = $name;
      $_SESSION['tempEmail'] = $email;
      $_SESSION['tempPhone'] = $phone;
      $_SESSION['tempMsg'] = $msg;
      $_SESSION['activityStatus'] = 'Trimiterea mesajului este incompletă ... <br> A apărut o eroare de conexiune cu baza de date !';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }
    //Method that retrieves the input from users and uploads it to the database
    else {
      mysqli_stmt_bind_param($stmt,"ssss",$name, $phone, $email, $msg);
      mysqli_stmt_execute($stmt);
      // Sending an copy of the enquery to the contact-us email
      $to = "contact@mirasoil.ro";
      $subject = "Mesaj de la: ".$email;
      $message = "Ai primit un mesaj de la: \r\n";
      $message .= $email;
      $message .= "\r\n Numar de contact:".' <a href="tel:'.$phone.'">'.$phone.'</a>'."   \r\n";
      $message .= $msg;
      $headers = "From:".$email."\r\n";
      $headers .= "Reply-to:".$email."\r\n";
      $headers .= "X-Mailer: PHP/".phpversion();
      mail($to, $subject, $message, $headers);
      $_SESSION['activityStatus'] = 'Multumim pentru mesaj, '.$name.' . <br> Revenim în cel mai scurt timp cu un răspuns.';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../index.php");
  exit();
}
