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

// Obtener el código del producto a actualizar y los nuevos valores del formulario
$codigo = $_POST["codigo"] ?? '';
$nombre = $_POST["nombre"] ?? '';
$marca = $_POST["marca"] ?? '';
$precio = $_POST["precio"] ?? '';
$cantidad = $_POST["cantidad"] ?? '';

// Verificar que el código no esté vacío
if (empty($codigo)) {
  echo "Código del producto no especificado";
  exit;
}

// Sentencia SQL para actualizar los datos del producto en la tabla "tabla30"
$sql = "UPDATE tabla30 SET nombre=?, marca=?, precio=?, cantidad=? WHERE codigo=?";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Vincular los parámetros de la sentencia
$stmt->bind_param("ssdss", $nombre, $marca, $precio, $cantidad, $codigo);

// Ejecutar la sentencia preparada
if ($stmt->execute()) {
  echo "Producto actualizado exitosamente";
} else {
  echo "Error al actualizar el producto: " . $stmt->error;
}

// Cierre de la conexión
$stmt->close();
$conn->close();

?>
