<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "proyecto_final_docker";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos!";
}
?>
