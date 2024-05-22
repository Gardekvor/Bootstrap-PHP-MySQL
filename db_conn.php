<?php
$servername = "localhost";
$username = "id21868051_root";
$password = "Matematicas.1";
$dbname = "id21868051_empresa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
