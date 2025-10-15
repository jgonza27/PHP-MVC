<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h3>Usuario registrado:</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";


    echo "<tr>";
    echo "<td>";
    echo  $usuario["id"];
    echo "</td>";
    echo "<td>";
    echo  $usuario["email"];
    echo "</td>";
    echo "<td>";
    echo  $usuario["password"];
    echo "</td>";
    echo "</tr>";


    echo "</table>";

    ?>
    
</body>
</html>
