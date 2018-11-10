<html>
    <head>
        <meta charset="UTF-8">
        <title>Promedio de notas</title>
    </head>
    <body>
        <?php
        $nombre = $_REQUEST["nombre"];
        $nota1 = $_REQUEST["nota1"];
        $nota2 = $_REQUEST["nota2"];
        $nota3 = $_REQUEST["nota3"];
        $promedio = ($nota1 + $nota2 + $nota3) / 3;
        $resultado;
        if ($promedio >= 4)
        {
            $resultado = "EXCELENTE";
        } 
        else if ($promedio >= 3)
        {
            $resultado = "ACEPTABLE";
        }
        else 
        {
            $resultado = "INSUFICIENTE";
        }
        echo 
        "<h1>Promedio de notas para el estudiante $nombre</h1>
        <p>Su promedio es $promedio, por lo tanto el concepto de nota es $resultado</p>
        ";
        include "footerEjercicios.php";
        ?>
        
    </body>
</html>
