<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Producto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Registrar Producto</h2>
    <form action="index.php?action=registrar" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Cantidad:</label>
        <input type="number" name="cantidad" required><br>

        <label>Precio Unitario:</label>
        <input type="number" step="0.01" name="precio_unitario" required><br>

        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="index.php?action=listar">Ver Productos</a>
</body>
</html>
