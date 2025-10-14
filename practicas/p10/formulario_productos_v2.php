<?php
// Mostrar errores para debug
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Obtener el ID por GET
$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID no proporcionado.");
}

// Conexión
$conn = new mysqli("localhost", "root", "miguel10", "marketzone");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta
$stmt = $conn->prepare("SELECT * FROM productos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$producto = $resultado->fetch_assoc();

if (!$producto) {
    die("Producto no encontrado.");
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: #f9f9f9;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #0078D7;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        button:hover {
            background-color: #005ea6;
        }
    </style>
</head>
<body>
    <h2>Editar Producto</h2>

    <form method="POST" action="update_producto.php">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required>

        <label>Marca:</label>
        <input type="text" name="marca" value="<?= htmlspecialchars($producto['marca']) ?>" required>

        <label>Modelo:</label>
        <input type="text" name="modelo" value="<?= htmlspecialchars($producto['modelo']) ?>" required>

        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" value="<?= $producto['precio'] ?>" required>

        <label>Detalles:</label>
        <textarea name="detalles" rows="4" required><?= htmlspecialchars($producto['detalles']) ?></textarea>

        <label>Unidades:</label>
        <input type="number" name="unidades" value="<?= $producto['unidades'] ?>" required>

        <label>Producto en existencia? (0 inexistente) (1 vigente):</label>
        <input type="number" name="eliminado" value="<?=$producto['eliminado']?>" requiered>

        <label>Imagen:</label>
        <input type="text" name="imagen" value="<?= htmlspecialchars($producto['imagen']) ?>" required>

        <button type="submit">Actualizar Producto</button>
    </form>
</body>
</html>
