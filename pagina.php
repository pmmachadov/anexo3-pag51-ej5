<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include 'funlib.php';
    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo3-pag51-ej5" . "</td>";
    echo "</tr>";
    echo "<td> " . "echo serialcheck('02394-45677-30950-34503')" . "</td>";
    echo "<td> " . "1" . "</td>";
    echo "</tr>";
    echo "</table>";

 
    echo serialcheck("02394-45677-30950-34503"); // Llama a la función y le pasa como parámetro la cadena
    ?>

</body>

</html>