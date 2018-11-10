<?php
function setLibros()
        {
            $libros = [
                1 => ["comprado" => false, "valor" => 20000, "nombre" => "La Odisea"],
                2 => ["comprado" => false, "valor" => 35000, "nombre" => "El Conde de Montecristo"],
                3 => ["comprado" => false, "valor" => 55000, "nombre" => "Viaje al Centro de la Tierra"],
                4 => ["comprado" => false, "valor" => 75000, "nombre" => "Cumbres Borrascosas"],
                5 => ["comprado" => false, "valor" => 15000, "nombre" => "Romeo y Julieta"],
                6 => ["comprado" => false, "valor" => 65000, "nombre" => "Cien años de soledad"]
            ];
            if (isset($_REQUEST["libro1"]))
            {
                $libros[1]["comprado"] = true;
            }
            if (isset($_REQUEST["libro2"]))
            {
                $libros[2]["comprado"] = true;
            }
            if (isset($_REQUEST["libro3"]))
            {
                $libros[3]["comprado"] = true;
            }
            if (isset($_REQUEST["libro4"]))
            {
                $libros[4]["comprado"] = true;
            }
            if (isset($_REQUEST["libro5"]))
            {
                $libros[5]["comprado"] = true;
            }
            if (isset($_REQUEST["libro6"]))
            {
                $libros[6]["comprado"] = true;
            }
            return $libros;
        }
        function contarLibros($libros)
        {
            $cuenta = 0;
            foreach ($libros as $libro)
            {
                if ($libro["comprado"] == true)
                {
                    $cuenta++;
                }
            }
            return $cuenta;
        }
        
        function totalLibros($libros)
        {
            $total = 0;
            foreach ($libros as $libro)
            {
                if ($libro["comprado"] == true)
                {
                    $total += $libro["valor"];
                }
            }
            return $total;
        }

