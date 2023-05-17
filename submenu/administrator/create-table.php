<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad30";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear la tabla
$sql = "CREATE TABLE tabla30 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
codigo VARCHAR(30) NOT NULL,
nombre VARCHAR(30) NOT NULL,
marca VARCHAR(30) NOT NULL,
precio INT(15) NOT NULL,
cantidad INT(4) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada exitosamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
