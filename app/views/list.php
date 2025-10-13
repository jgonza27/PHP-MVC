<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h3>Lista de usuarios registrados:</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";

for ($i = 0 ; $i < count($usuarios); $i++){
    echo "<tr>";
    echo "<td>";
    echo  $usuarios[$i]["id"];
    echo "</td>";
    echo "<td>";
    echo  $usuarios[$i]["email"];
    echo "</td>";
    echo "<td>";
    echo  $usuarios[$i]["password"];
    echo "</td>";
    echo "</tr>";
}

    echo "</table>";

    ?>
    
</body>
</html>
