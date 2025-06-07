<?php
require_once "../controllers/ProductoController.php";

$action = $_GET['action'] ?? 'listar';

$controller = new ProducController();

switch($action) {
    case 'registrar':
        $controller->registrar();
        break;
    case 'listar':
    default:
        $controller->listar();
        break;
}
