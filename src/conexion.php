<?php
$servername = "mysql_server";
$username   = "root";
$password   = "rootpass";
$database   = "mi_base";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
