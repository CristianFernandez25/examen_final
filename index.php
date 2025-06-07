<?php
require_once "controllers/ProductoController.php";

$action = $_GET['action'] ?? 'registrar';
$controller = new ProductoController();

switch ($action) {
    case 'registrar':
        $controller->registrar();
        break;
    case 'listar':
        $controller->listar();
        break;
    default:
        echo "Acción no válida";
        break;
}
