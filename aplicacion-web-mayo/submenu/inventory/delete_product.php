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

// Obtener el valor del código del producto enviado desde el formulario
$codigo = $_POST["codigo"];

// Sentencia SQL para eliminar el producto de la tabla "tabla30"
$sql = "DELETE FROM tabla30 WHERE codigo = ?";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Vincular el parámetro de la sentencia
$stmt->bind_param("s", $codigo);

// Ejecutar la sentencia preparada
if ($stmt->execute()) {
  echo "Producto eliminado exitosamente";
} else {
  echo "Error al eliminar el producto: " . $stmt->error;
}

// Cierre de la conexión
$stmt->close();
$conn->close();

?>