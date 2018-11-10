<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculador de cambio</title>
    </head>
    <body>
        <h1>Calculador de cambio</h1>
        <p>Su cambio es:</p>
        <?php
        $cambio = $_REQUEST["cambio"];
        $cambioOG = $cambio;
        $monedas = [
          500 => 0, 200 => 0, 100 => 0, 50 => 0
        ];
        echo "<ul>
        <li>Cambio original: $$cambioOG</li>";
        foreach ($monedas as $llave => $valor)
        {
            while ($cambio >= $llave){
                $monedas[$llave] = intdiv($cambio, $llave);
                $cambio -= $llave * $monedas[$llave];
            }
            echo "<li> Monedas de $$llave: $monedas[$llave]</li>";
        }
        echo "<li> Cambio faltante: $$cambio</li>
        </ul>";
        include "footerEjercicios.php";
        ?>
        
    </body>
</html>
