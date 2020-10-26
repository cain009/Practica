<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tabla de registro</title>
</head>
<body>
    <center>
        <h1>Tabla de registro</h1>

        <caption>Usuarios</caption>
        <table>
            <?php
                echo '<table border="1" align="center" width=80%';
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Cedula</th>";
                echo "<th>Usuario</th>";
                echo "<th>Rol</th>";
                echo "</tr>";
            ?>
        </table>
    </center>
</body>
</html>