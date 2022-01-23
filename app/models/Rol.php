<?php
class Rol {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllRoles() {
        $this->db->query('SELECT * FROM rol ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addRol($data) {
        $this->db->query('INSERT INTO rol (id, nombre, borrado, res_centro, res_titulacion, res_asignatura, res_universidad, borrado) VALUES (:id, :nombre, :borrado, :res_centro, :res_titulacion, :res_asignatura, :res_universidad, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':borrado', $data['borrado']);
        $this->db->bind(':res_centro', $data['res_centro']);
        $this->db->bind(':res_titulacion', $data['res_titulacion']);
        $this->db->bind(':res_asignatura', $data['res_asignatura']);
        $this->db->bind(':res_universidad', $data['res_universidad']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findRolById($id) {
        $this->db->query('SELECT * FROM rol WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateRol($data) {
        $this->db->query('UPDATE rol SET id = :id, nombre = :nombre, borrado = :borrado, res_centro = :res_centro, res_titulacion = :res_titulacion, res_asignatura = :res_asignatura, res_universidad = :res_universidad WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':borrado', $data['borrado']);
        $this->db->bind(':res_centro', $data['res_centro']);
        $this->db->bind(':res_titulacion', $data['res_titulacion']);
        $this->db->bind(':res_asignatura', $data['res_asignatura']);
        $this->db->bind(':res_universidad', $data['res_universidad']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRol($id) {
        $this->db->query('DELETE FROM rol WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
