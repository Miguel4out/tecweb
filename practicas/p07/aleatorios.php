<?php
    function Numeros_aleatorios(){
        $matriz = [];
        $encontrado = false;
        $i = 0;

        do {
        
            $fila = [
                rand(1, 1000),
                rand(1, 1000),
                rand(1, 1000)
            ];

        
            $matriz[] = $fila;
            $i++;

        
            $regla = ($fila[0] % 2 != 0) && ($fila[1] % 2 == 0) && ($fila[2] % 2 != 0);

            if ($regla) {
                $encontrado = true;
            }

    } while (!$encontrado);
        echo "<table border='1' cellpadding='5'><tr><th>#</th><th>Columna 1</th><th>Columna 2</th><th>Columna 3</th></tr>";

        foreach ($matriz as $i => $fila) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>{$fila[0]}</td><td>{$fila[1]}</td><td>{$fila[2]}</td>";
            echo "</tr>";
        }

        echo "</table>";

        echo "<p><strong>Número de iteraciones:</strong> ",($i+1),"</p>";
        echo "<p><strong>Total de números generados:</strong> " . (($i+1) * 3) . "</p>";
    }
?>