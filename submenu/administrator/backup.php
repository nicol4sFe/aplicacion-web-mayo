<?php
// Establecer los detalles de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad30";

// Ruta donde se guardará el archivo de backup
$backup_file = '../backup.sql';

// Comando para ejecutar mysqldump.exe
$command = "C:/xampp/mysql/bin/mysqldump.exe --user={$username} --password={$password} --host={$servername} {$dbname} > {$backup_file}";

// Ejecutar el comando
system($command);

// Descargar el archivo de backup
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($backup_file) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($backup_file));
readfile($backup_file);

// Eliminar el archivo de backup
unlink($backup_file);

?>