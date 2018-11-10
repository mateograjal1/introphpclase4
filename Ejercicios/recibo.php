<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Libreria el Analfabeta</h1>
        <?php
        include "funciones.php";

        date_default_timezone_set("America/Bogota");
        $nombre = $_REQUEST["nombre"] . " " . $_REQUEST["apellidos"];
        $libros = setLibros();
        $cantidadLibros = contarLibros($libros);
        $totalLibros = totalLibros($libros);
        $iva = $totalLibros * 0.19;
        $totalLibros -= $iva;
        $descuentoPorMayor = ($cantidadLibros >= 4 ? $totalLibros * 0.22 : 0);
        $impuestoBitcoin = ($_REQUEST["metodoPago"] == "bitcoin" ? $totalLibros * 0.13 : 0);
        $gastosEnvio = ($cantidadLibros == 6 ? 0 : $cantidadLibros * 2000);
        $total = $totalLibros + $iva - $descuentoPorMayor + $impuestoBitcoin + $gastosEnvio;
        $fecha = date("d/m/Y h:i:s a");
        echo "<p>Fecha: $fecha<br>"
        . "Cliente: $nombre<br>"
        . "Libros comprados: $cantidadLibros<br>"
        . "Total: $$totalLibros<br>IVA: $$iva<br>";
        if ($descuentoPorMayor > 0) {
            echo "Descuento al por mayor: -$$descuentoPorMayor<br>";
        }
        if ($impuestoBitcoin > 0) {
            echo "Impuesto por compra con Bitcoins: $$impuestoBitcoin<br>";
        }
        if ($gastosEnvio > 0) {
            echo "Gastos de envio: $$gastosEnvio<br>";
        }
        echo "Total de la compra: $$total</p>";
        ?>

    </body>
</html>
