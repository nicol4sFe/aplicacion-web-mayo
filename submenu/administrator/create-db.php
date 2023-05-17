<?php
// Datos de conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "12345678";

// Conexión a la base de datos
$db = new mysqli($host, $user, $password);

// Verificación de errores en la conexión
if ($db->connect_error) {
  die("Error de conexión: " . $db->connect_error);
}

// Creación de la base de datos "bdunad30"
$sql = "CREATE DATABASE IF NOT EXISTS bdunad30";
if ($db->query($sql) === TRUE) {
  echo "La base de datos 'bdunad30' ha sido creada exitosamente";
} else {
  echo "Error al crear la base de datos: " . $db->error;
}

// Cierre de la conexión
$db->close();

?>