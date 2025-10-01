<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        require_once("funciones.php");
        Calcula_multiplos($_GET["numero"]);
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>

    <h2>Generación de números aleatorios </h2>
    <?php
        if (isset($_POST["generar"])) {
        require_once("aleatorios.php");
        Numeros_aleatorios();
        }
    ?>
     <form method="post">
        <button type="submit" name ="generar" >Generar Números</button>
    </form>

    <h2>Encontrar aleatorio</h2>
    <?php
        if(isset($_GET["numero"])){
            obtener_multiplo($_GET["numero"]);
        }
    ?>
    <form method="get">
        <label>Ingresa número </label>
        <input type="number" name ="numero" required>
        <button type = "submit"> Buscar</button>
    </form>

    <h2>Tabla de carácteres en código ASCII</h2>
    <?php
        caracteres();
    ?>

    <h2>Formulario de registro</h2>
    <form method="post">
        <label>Edad:</label>
        <input type="number" name="edad" required><br><br>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="">Seleccione</option>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select><br><br>

        <button type="submit">Enviar</button>
        <?php
             if(isset($_POST["sexo"]) && isset($_POST["edad"]))
        {
            registro_sexo($_POST["edad"],$_POST["sexo"]);
        }
        ?>
    </form>


</body>
</html>