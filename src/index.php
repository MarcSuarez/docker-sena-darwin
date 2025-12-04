<?php
include 'conexion.php';
$resultado = $conn->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP - Lista</title>
</head>
<body>
<h1>Lista de usuarios</h1>

<a href="crear.php">Crear nuevo usuario</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Edad</th>
        <th>Género</th>
        <th>Acciones</th>
    </tr>

    <?php while ($fila = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?= $fila['id'] ?></td>
        <td><?= $fila['nombre'] ?></td>
        <td><?= $fila['apellido'] ?></td>
        <td><?= $fila['correo'] ?></td>
        <td><?= $fila['edad'] ?></td>
        <td><?= $fila['genero'] ?></td>
        <td>
            <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a> |
            <a href="eliminar.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿Eliminar este registro?')">Eliminar</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
