<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cliente";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn == true) {
  die("Conexão Falhou " . mysqli_connect_error());
}
