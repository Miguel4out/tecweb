<?php

function Calcula_multiplos($numero){
    if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
}

function obtener_multiplo($numero){
    $i = 0;
    $encontrado = false;

    while (!$encontrado) {
        $aleatorio = rand(1, 1000);
        $i++;

        if ($aleatorio % $numero === 0) {
            $encontrado = true;
            echo "Número encontrado: $aleatorio <br>";
            echo "Intentos: ",$i+1,"<br>";
        }
    }
}

function caracteres(){
    $arreglo = [];

    for ($i = 97; $i <= 122; $i++) {
        $arreglo[$i] = chr($i);
    }

    echo '<table border="1" cellpadding="5">';
    echo '<tr><th>Código ASCII</th><th>Letra</th></tr>';

    foreach ($arreglo as $key => $value) {
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . htmlspecialchars($value) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
function registro_sexo($edad,$sexo){
        if ($sexo === "femenino" && $edad >= 18 && $edad <= 35) {
            echo "<p style='color:green;'><strong>Bienvenida</strong>, usted está en el rango de edad permitido.</p>";
        } else {
            echo "<p style='color:red;'><strong>Acceso denegado</strong>, no cumple con los requisitos.</p>";
        }
}

?>

