<?php
include 'conexion.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];

    $conn->query("INSERT INTO usuarios (nombre, apellido, correo, edad, genero) 
                  VALUES ('$nombre', '$apellido', '$correo', $edad, '$genero')");

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
    Apellido: <input type="text" name="apellido" required><br><br>
    Correo: <input type="email" name="correo" required><br><br>
    Edad: <input type="number" name="edad" required><br><br>

    Género:
    <select name="genero" required>
        <option value="">Seleccione</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Otro">Otro</option>
    </select>
    <br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>
