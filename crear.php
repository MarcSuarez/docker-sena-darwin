<?php
include 'conexion.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $conn->query("INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear usuario</title>
</head>
<body>

<h1>Crear usuario</h1>

<form method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
