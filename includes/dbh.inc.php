<?php
$servername = "localhost";
$dBEmail = "root";
$dBPassword ="";
$dBName = "mirasoi1_database";
$conn = mysqli_connect($servername, $dBEmail, $dBPassword, $dBName);
$conn->query('SET character_set_client="utf8",character_set_connection="utf8",character_set_results="utf8";');
if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}