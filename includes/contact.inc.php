<?php
if (isset($_POST['contact-submit'])) {

  require 'dbh.inc.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['message'];

//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($name) || empty($email) || empty($phone) || empty($msg)) {
    header("Location: ../index.php?error=emptyfields&name=".$name."&email=".$email."&msg=".$msg."&phone=".$phone);
    exit();
  }
  //Method that checks if the Email entered is valid and returns the user to contact with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index.php?error=invalidEmail&msg=".$msg."&phone=".$phone."&name=".$name);
    exit();
  }
    //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s.,?!()]*$/",$msg)) {
    header("Location: ../index.php?error=invalidMesage&email=".$email."&name=".$name."&phone=".$phone);
    exit();
  }
    elseif (!preg_match("/^[a-zA-Z\s]*$/",$name)) {
    header("Location: ../index.php?error=invalidName$email=".$email."&msg=".$msg."&phone=".$phone);
    exit();
  }
  elseif (!preg_match("/^[0-9]*$/",$phone)) {
    header("Location: ../index.php?error=invalidPhone&email=".$email."&name=".$name."&msg=".$msg);
    exit();
  }
  else {
    //SQL variable that runs an SQL statement to insert data into the database
    $sql = "INSERT INTO contact (nume, phone, email, message) VALUES(?, ?, ?, ?)";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);

    //Method that check if the sql statement can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../contact.php?error=sqlUploadError");
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
      header("Location: ../index.php?message-submit=success");
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
