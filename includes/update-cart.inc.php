<?php
if (isset($_POST['cos-submit'])) {
  $denumire = $_POST['denumire'];
  $pret = $_POST['pret'];
  $image = $_POST['image'];
  $cantitate = $_POST['cantitate'];
  session_destroy($_SESSION['denumireProdus']);
  session_destroy($_SESSION['pretProdus']);
  session_destroy($_SESSION['cantitateProdus']);
  session_destroy($_SESSION['imagineProdus']);
  session_commit();

//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($cantitate)) {
    header("Location: ../produse.php?error=cantitateInvalida");
    exit();
  }
  //Method that checks if the quantity entered is valid
  elseif ($cantitate === 0 || $cantitate < 0 ) {
    header("Location: ../produse.php?error=cantitateaEsteNulaSauNegativa");
    exit();
  }
  else {
    $_SESSION['denumireProdus'] = $denumire;
    $_SESSION['pretProdus'] = $pret;
    $_SESSION['cantitateProdus'] = $cantitate;
    $_SESSION['imagineProdus'] = $image;
    include 'cos.inc.php';
    header("Location: ../produse.php?success=ProdusAdaugat");
    }  
  }
else {
  header("Location: ../produse.php");
  exit();
}
