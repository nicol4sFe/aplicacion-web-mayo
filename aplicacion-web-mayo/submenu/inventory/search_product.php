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

// Obtener el valor del campo "codigo" del formulario
if (isset($_POST["codigo"])) {
    $codigo = $_POST["codigo"];

    // Validar y filtrar la entrada del usuario
    $codigo = trim($codigo);
    $codigo = htmlspecialchars($codigo);

    // Sentencia SQL con marcador de posición para el código
    $sql = "SELECT * FROM tabla30 WHERE codigo = ?";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);

    // Vincular el parámetro
    $stmt->bind_param("s", $codigo);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado de la consulta
    $resultado = $stmt->get_result();

    // Mostrar los resultados de la consulta
    if ($resultado->num_rows > 0) {
        // Iterar sobre cada fila de resultados
        while ($fila = $resultado->fetch_assoc()) {
            // Mostrar los datos del producto en la página web
            echo "Código: " . $fila["codigo"] . "<br>";
            echo "Nombre: " . $fila["nombre"] . "<br>";
            echo "Marca: " . $fila["marca"] . "<br>";
            echo "Precio: $" . $fila["precio"] . "<br>";
            echo "Cantidad: " . $fila["cantidad"] . "<br>";
        }
    } else {
        echo "No se encontró ningún producto con el código $codigo";
    }

    // Cierre de la conexión
    $stmt->close();
    $conn->close();
}
?>
