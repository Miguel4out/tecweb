<?php
// Conexión a la base de datos
@$link = new mysqli("localhost", "root", "miguel10", "marketzone");

if ($link->connect_errno) {
    die("Fallo la conexión: " . $link->connect_error);
}

$sql = "SELECT * FROM productos WHERE eliminado = 0";
$result = $link->query($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
    <title>Productos Vigentes</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }

        img {
            max-width: 80px;
        }

        .btn-editar {
            background-color: #f90;
            color: #fff;
            padding: 6px 10px;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-editar:hover {
            background-color: #c70;
        }
    </style>
</head>
<body>
    <h2>Productos Vigentes</h2>

    <?php if ($result && $result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th>Unidades</th>
                    <th>Detalles</th>
                    <th>Imagen</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['modelo'] ?></td>
                        <td>$<?= number_format($row['precio'], 2) ?></td>
                        <td><?= $row['unidades'] ?></td>
                        <td><?= $row['detalles'] ?></td>
                        <td><img src="<?= $row['imagen'] ?>" alt="imagen" /></td>
                        <td>
                            <a class="btn-editar" href="formulario_productos_v2.php?id=<?= $row['id'] ?>">Editar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay productos vigentes registrados.</p>
    <?php endif; ?>

<?php $link->close(); ?>
</body>
</html>
