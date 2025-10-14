<table class="table">
    <thead>
        <tr>
            <th>#</th>
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
    <?php
    $conn = new mysqli('localhost', 'root', 'miguel10', 'marketzone');
    $result = $conn->query("SELECT * FROM productos");

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['marca']}</td>
            <td>{$row['modelo']}</td>
            <td>{$row['precio']}</td>
            <td>{$row['unidades']}</td>
            <td>{$row['detalles']}</td>
            <td><img src='{$row['imagen']}' width='80'></td>
            <td><a href='formulario_productos_v2.php?id={$row['id']}' class='btn btn-sm btn-warning'>Editar</a></td>
        </tr>";
    }

    $conn->close();
    ?>
    </tbody>
</table>
