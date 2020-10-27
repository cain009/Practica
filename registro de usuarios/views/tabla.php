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
<<<<<<< HEAD
                
                foreach($arreglo as $key)
                {
                    echo "<tr>";
                    echo "<td>".$key['nombre']."</td>";
                    echo "<td>".$key['apellido']."</td>";
                    echo "<td>".$key['cedula']."</td>";
                    echo "</tr>";
                }
=======
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Cedula</th>";
                echo "<th>Usuario</th>";
                echo "<th>Rol</th>";
		echo "</tr>";

		foreach($arreglo as $key){
			echo "<tr>";
			echo "<td>".$key['Nombre']."</td>";
			echo "<td>".$key['Apellido']."</td>";
			echo "</tr>";

		}
>>>>>>> aeed3caee04a1e12282ac823a51e9e58b3ef187c
            ?>
        </table>
    </center>
</body>
</html>
