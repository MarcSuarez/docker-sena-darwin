<?php
$servername = "mi-mysql";
$username = "root";
$password = "1234";
$database = "crud_db"; // cambia por tu BD

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
