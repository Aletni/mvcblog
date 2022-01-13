<?php
class Funcionalidad {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllFuncionalidades() {
        $this->db->query('SELECT * FROM funcionalidad ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addFuncionalidad($data) {
        $this->db->query('INSERT INTO funcionalidad (id, nombre, descripcion, borrado) VALUES (:id, :nombre, :descripcion, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':descripcion', $data['descripcion']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findFuncionalidadById($id) {
        $this->db->query('SELECT * FROM funcionalidad WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateFuncionalidad($data) {
        $this->db->query('UPDATE funcionalidad SET id = :id, nombre = :nombre, descripcion = :descripcion, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':descripcion', $data['descripcion']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteFuncionalidad($id) {
        $this->db->query('DELETE FROM funcionalidad WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
