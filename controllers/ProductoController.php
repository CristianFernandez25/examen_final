<?php
require_once "../config/Database.php";
require_once "../models/producto.php";

class ProducController {
    private $db;
    private $producto;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->producto = new Producto($this->db);
    }

    public function listar() {
        $stmt = $this->producto->listar();
        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require_once "../views/productos/listar.php";
    }

    public function registrar() {
        if($_POST) {
            $this->producto->nombre = $_POST['nombre'] ?? '';
            $this->producto->cantidad = $_POST['cantidad'] ?? 0;
            $this->producto->precio_unitario = $_POST['precio_unitario'] ?? 0;

            if($this->producto->registrar()) {
                header("Location: index.php?action=listar");
                exit;
            } else {
                $error = "No se pudo registrar el producto.";
            }
        }
        require_once "../views/productos/registrar.php";
    }
}
