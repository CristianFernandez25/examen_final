<?php
require_once "Conexion.php";

class Producto {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexion::conectar();
    }

    public function registrar($nombre, $cantidad, $precio_unitario) {
        $sql = "INSERT INTO productos (nombre, cantidad, precio_unitario) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nombre, $cantidad, $precio_unitario]);
    }

    public function obtenerTodos() {
        $sql = "SELECT * FROM productos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

