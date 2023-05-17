<?php
// Cargar la librería mPDF
require_once __DIR__ . '/../../vendor/autoload.php';

// Obtener los datos de la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad30";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT codigo, nombre, marca, precio, cantidad FROM tabla30";
$result = $conn->query($sql);

// Crear un nuevo objeto mPDF
$mpdf = new \Mpdf\Mpdf();

// Crear el contenido del PDF
$html = '<h1>Reporte de productos</h1>';
$html .= '<table><thead><tr><th>Código</th><th>Nombre</th><th>Marca</th><th>Precio</th><th>Cantidad</th></tr></thead><tbody>';
while ($row = $result->fetch_assoc()) {
  $html .= '<tr><td>' . $row["codigo"] . '</td><td>' . $row["nombre"] . '</td><td>' . $row["marca"] . '</td><td>' . $row["precio"] . '</td><td>' . $row["cantidad"] . '</td></tr>';
}
$html .= '</tbody></table>';

// Agregar el contenido al PDF
$mpdf->WriteHTML($html);

// Descargar el PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment');
$mpdf->Output('reporte.pdf', 'D');

?>