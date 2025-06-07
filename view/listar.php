<?php
ob_start();
?>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Valor Total</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($productos) > 0): ?>
            <?php foreach($productos as $prod): ?>
            <tr>
                <td><?php echo htmlspecialchars($prod['nombre']); ?></td>
                <td><?php echo $prod['cantidad']; ?></td>
                <td>$<?php echo number_format($prod['precio_unitario'], 2); ?></td>
                <td>$<?php echo number_format($prod['cantidad'] * $prod['precio_unitario'], 2); ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No hay productos registrados.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
require_once "../view/layout.php";
