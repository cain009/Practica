<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla en php</title>

</head>
<body>
    <center>
        <h1>Tabla en PHP</h1>

        <CAption>Usuarios</CAption>
        <table>
            <?php
                echo '<table border="1" align="center" width=80%>';
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Cedula</th>";
                echo "<th>Usuarios</th>";
                echo "<th>Rol</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Fernando</th>";
                echo "<th>Hernande</th>";
                echo "<th>14166420</th>";
                echo "<th>Fhernandezs</th>";
                echo "<th>Administrador</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>David</th>";
                echo "<th>Jimenez</th>";
                echo "<th>20566820</th>";
                echo "<th>Djimenez</th>";
                echo "<th>Auditor</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Arnoldo</th>";
                echo "<th>Peña</th>";
                echo "<th>24756470</th>";
                echo "<th>Apeña</th>";
                echo "<th>Coordinador</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Johan</th>";
                echo "<th>Estrada</th>";
                echo "<th>19156110</th>";
                echo "<th>Jestrada</th>";
                echo "<th>Asistente</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Leandro</th>";
                echo "<th>Ramirez</th>";
                echo "<th>22196320</th>";
                echo "<th>Lramirez</th>";
                echo "<th>Usuario</th>";
                echo "</tr>";
            ?>
        </table>
    </center>
</body>
</html>