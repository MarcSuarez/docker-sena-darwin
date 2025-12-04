<?php
include 'conexion.php';

$id = $_GET['id'];
$resultado = $conn->query("SELECT * FROM usuarios WHERE id = $id");
$usuario = $resultado->fetch_assoc();

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];

    $conn->query("UPDATE usuarios 
                  SET nombre='$nombre', apellido='$apellido', correo='$correo', edad=$edad, genero='$genero'
                  WHERE id=$id");

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
    Nombre:
    <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required><br><br>

    Apellido:
    <input type="text" name="apellido" value="<?= $usuario['apellido'] ?>" required><br><br>

    Correo:
    <input type="email" name="correo" value="<?= $usuario['correo'] ?>" required><br><br>

    Edad:
    <input type="number" name="edad" value="<?= $usuario['edad'] ?>" required><br><br>

    Género:
    <select name="genero" required>
        <option value="Masculino" <?= $usuario['genero'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
        <option value="Femenino" <?= $usuario['genero'] == 'Femenino' ? 'selected' : '' ?>>Femenino</option>
        <option value="Otro" <?= $usuario['genero'] == 'Otro' ? 'selected' : '' ?>>Otro</option>
    </select>
    <br><br>

    <button type="submit">Actualizar</button>
</form>

</body>
</html>
