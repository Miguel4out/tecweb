<?php
// update_producto.php

$conn = new mysqli("localhost", "root", "miguel10", "marketzone");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $unidades = $_POST['unidades'];
    $detalles = $_POST['detalles'];
    $eliminado = $_POST['eliminado'];
    $imagen = $_POST['imagen'];

    $stmt = $conn->prepare("UPDATE productos SET nombre=?, marca=?, modelo=?, precio=?, unidades=?, detalles=?, imagen=?,eliminado=? WHERE id=?");
    $stmt->bind_param("sssdissii", $nombre, $marca, $modelo, $precio, $unidades, $detalles, $imagen,$eliminado, $id);

    if ($stmt->execute()) {
        echo "<script>alert(' Producto actualizado correctamente'); window.location.href='get_productos_xhtml_v2.php';</script>";
    } else {
        echo "Error al actualizar: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Acceso no permitido";
}

$conn->close();
?>
