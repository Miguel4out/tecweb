<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida
        
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';

        $a = "ManejadorSQL";
        $b = "MySQL";
        $c = &$a;

        echo "<li> $c";

        $a = "PHP server";
        $b = &$a;
    
        echo "<li> $b </li>" ;
        $a = "PHP5";
        echo "<li> $a </li>";
        $z[] = &$a;
        $b = "5a version de PHP";
        echo "<li> $b </li>";
        $c = $b*10;
        echo "<li> $c </li>";
        $a .= $b;
        echo "<li> $a </li>";
        $b *= $c;
        echo "<li> $b </li>";
        $z[0] = "MySQL";
        foreach($z as $item){
            echo "<li>$item</li>";
        };

        function mostrarVariables() {
        global $a, $b, $c, $z;

        echo "<h3>Valores usando global</h3>";
        echo "<ul>";
        echo "<li>\$a = $a</li>";
        echo "<li>\$b = $b</li>";
        echo "<li>\$c = $c</li>";

            foreach ($z as $key => $value) {
                echo "<li>\$z[$key] = $value</li>";
            }

        echo "</ul>";
        }

        mostrarVariables();

    $a = "7 personas";
    echo "<li>$a </li>";
    $b = (integer) $a;
    echo "<li>$b </li>";
    $a = "9E3";
    echo "<li>$a </li>";
    $c = (double) $a;
    echo "<li>$c </li>";


    $a = "0";
    $b = "TRUE";
    $c = FALSE;
    $d = ($a OR $b);
    $e = ($a AND $c);
    $f = ($a XOR $b);

    echo "<pre>";
        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
    echo "</pre>";

    echo "<li>\$c = " . var_export($c, true) . "</li>";
    echo "<li>\$e = " . var_export($e, true) . "</li>";


    echo '<br>Versión de PHP: ' . phpversion();
    echo '<br>Software del servidor: ' . $_SERVER['SERVER_SOFTWARE'];
    echo '<br>Sistema operativo del servidor: ' . PHP_OS;
    echo '<br>Idioma del navegador: ' . $_SERVER['HTTP_ACCEPT_LANGUAGE'];



    ?>
</body>
</html>