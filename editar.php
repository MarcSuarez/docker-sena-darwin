<?php
include 'conexion.php';

$id = $_GET['id'];
$resultado = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$usuario = $resultado->fetch_assoc();

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $conn->query("UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=$id");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar usuario</title>
</head>
<body>

<h1>Editar usuario</h1>

<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $usuario['email'] ?>" required><br><br>
    <button type="submit">Actualizar</button>
</form>

</body>
</html>
