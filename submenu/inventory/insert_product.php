<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad30";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificación de la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los valores del formulario 
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

// Sentencia SQL preparada para insertar los datos del producto en la tabla "tabla30"
$sql = "INSERT INTO tabla30 (codigo, nombre, marca, precio, cantidad) VALUES (?, ?, ?, ?, ?)";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Vincular los parámetros de la sentencia
$stmt->bind_param("sssss", $codigo, $nombre, $marca, $precio, $cantidad);

// Ejecutar la sentencia preparada
if ($stmt->execute()) {
  echo "Producto insertado exitosamente";
} else {
  echo "Error al insertar el producto: " . $stmt->error;
}

// Cierre de la conexión
$stmt->close();
$conn->close();

?>
