<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h1>Secuencia de Fibonacci</h1>
        <form method="POST" action="Ejercicio3.php">
            <label>Ingrese la cantidad de digitos a ver</label>
            <input type="number" name="iteraciones" min="1" max="100" required>
            <br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        function fibonacci($valor1, $valor2, $iteraciones)
        {
            $temp = $valor1 + $valor2;
            echo ", $temp";
            if ($iteraciones > 1)
            {
                fibonacci($valor2, $temp, $iteraciones - 1);
            }
        }
        
        if (isset($_REQUEST["iteraciones"]))
        {
            $iteraciones = $_REQUEST["iteraciones"];
            echo "<p>La secuencia de Fibonacci hasta el indice $iteraciones es:<br>";
            switch ($iteraciones)
            {
                case 1:
                    echo "1";
                    break;
                case 2:
                    echo "0, 1";
                    break;
                default:
                    echo "0, 1";
                    fibonacci(0, 1, $iteraciones-2);
                    break;
            }
            echo "</p>";
        }
        include "footerEjercicios.php";
        ?>
    </body>
</html>
