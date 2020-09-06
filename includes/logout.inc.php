<?php
session_start();
session_unset();
session_destroy();
$_SESSION['activityStatus'] = 'Contul a fost deconectat cu succes!';
header("Location: ..".$_SESSION['currentSessionUrl']."");
exit();