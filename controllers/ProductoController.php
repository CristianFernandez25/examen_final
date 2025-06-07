<?php
require_once "models/Producto.php";

class ProductoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Producto();
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio_unitario'];
            $this->modelo->registrar($nombre, $cantidad, $precio);
            header("Location: index.php?action=listar");
        } else {
            require_once "views/registrar.php";
        }
    }

    public function listar() {
        $productos = $this->modelo->obtenerTodos();
        require_once "views/listar.php";
    }
}
