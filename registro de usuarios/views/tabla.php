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
                
                foreach($arreglo as $key)
                {
                    echo "<tr>";
                    echo "<td>".$key['nombre']."</td>";
                    echo "<td>".$key['apellido']."</td>";
                    echo "<td>".$key['cedula']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </center>
</body>
</html>