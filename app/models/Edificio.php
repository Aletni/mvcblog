<?php
class Edificio {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllEdificios() {
        $this->db->query('SELECT * FROM edificio ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addEdificio($data) {
        $this->db->query('INSERT INTO edificio (id, id_ANHOACADEMICO, id_UNIVERSIDAD, nombre, ubicacion, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_UNIVERSIDAD, :nombre, :ubicacion, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_UNIVERSIDAD', $data['id_UNIVERSIDAD']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':ubicacion', $data['ubicacion']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findEdificioById($id) {
        $this->db->query('SELECT * FROM edificio WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateEdificio($data) {
        $this->db->query('UPDATE edificio SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_UNIVERSIDAD = :id_UNIVERSIDAD, nombre = :nombre, ubicacion = :ubicacion, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_UNIVERSIDAD', $data['id_UNIVERSIDAD']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':ubicacion', $data['ubicacion']);
        $this->db->bind(':borrado', $data['borrado']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteEdificio($id) {
        $this->db->query('DELETE FROM edificio WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
