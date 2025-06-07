<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="../public/styles.css" />
</head>
<body>
    <header>
        <h1>Inventario de Productos</h1>
        <nav>
            <a href="index.php?action=listar">Listado</a> |
            <a href="index.php?action=registrar">Registrar Producto</a>
        </nav>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>
