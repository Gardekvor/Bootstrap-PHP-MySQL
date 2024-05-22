<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `productos` WHERE idpro = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Borrado de datos exitoso");
} else {
  echo "Failed: " . mysqli_error($conn);
}
