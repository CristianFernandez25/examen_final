<?php
ob_start();
?>

<h2>Registrar Producto</h2>

<?php if(!empty($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="post" action="index.php?action=registrar">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="cantidad">Cantidad:</label><br>
    <input type="number" id="cantidad" name="cantidad" min="0" required><br><br>

    <label for="precio_unitario">Precio Unitario:</label><br>
    <input type="number" id="precio_unitario" name="precio_unitario" step="0.01" min="0" required><br><br>

    <button type="submit">Registrar</button>
</form>

<?php
$content = ob_get_clean();
require_once "../view/layout.php";
