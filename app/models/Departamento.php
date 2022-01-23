<?php
class Departamento {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllDepartamentos() {
        $this->db->query('SELECT * FROM departamento ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addDepartamento($data) {
        $this->db->query('INSERT INTO departamento (id, id_ANHOACADEMICO, id_CENTRO, codigo, nombre, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_CENTRO, :codigo, :nombre, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_CENTRO', $data['id_CENTRO']);
        $this->db->bind(':codigo', $data['codigo']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findDepartamentoById($id) {
        $this->db->query('SELECT * FROM departamento WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateDepartamento($data) {
        $this->db->query('UPDATE departamento SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_CENTRO = :id_CENTRO, codigo = :codigo, nombre = :nombre, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_CENTRO', $data['id_CENTRO']);
        $this->db->bind(':codigo', $data['codigo']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDepartamento($id) {
        $this->db->query('DELETE FROM departamento WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
