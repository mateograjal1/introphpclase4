<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Calculadora de billetes</h1>
        <form method="GET" action="Ejercicio4.php">
            <label>Ingrese el valor: </label>
            <input type="number" name="cambio" min="0" max="1000000" step="1000" required>
            <br>
            <input type="submit" value="Calcular">
        </form>
        <?php

        function calcularCambio($cambio) {
            $billetes = [
                50000 => 0,
                10000 => 0,
                5000 => 0,
                2000 => 0,
                1000 => 0
            ];
            foreach ($billetes as $llave => $valor) {
                while ($cambio >= $llave) {
                    $billetes[$llave] = intdiv($cambio, $llave);
                    $cambio -= $llave * $billetes[$llave];
                }
            }
            return $billetes;
        }

        if (isset($_REQUEST["cambio"])) {
            $cambio = $_REQUEST["cambio"];
            $billetes = calcularCambio($_REQUEST["cambio"]);
            echo "<p>Los billetes para obtener el valor de $$cambio:<br><ul>";
            foreach ($billetes as $llave => $valor) {
                echo "<li>Billetes de $$llave: $valor</li>";
            }
            echo "</ul></p>";
        }
        include "footerEjercicios.php";
        ?>
    </body>
</html>
