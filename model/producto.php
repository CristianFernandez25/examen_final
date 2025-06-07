<?php
class Producto {
    private $conn;
    private $table = "productos";

    public $id;
    public $nombre;
    public $cantidad;
    public $precio_unitario;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listar() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function registrar() {
        $query = "INSERT INTO " . $this->table . " SET nombre=:nombre, cantidad=:cantidad, precio_unitario=:precio_unitario";
        $stmt = $this->conn->prepare($query);

        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->cantidad = htmlspecialchars(strip_tags($this->cantidad));
        $this->precio_unitario = htmlspecialchars(strip_tags($this->precio_unitario));

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":cantidad", $this->cantidad, PDO::PARAM_INT);
        $stmt->bindParam(":precio_unitario", $this->precio_unitario);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
