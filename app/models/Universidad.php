<?php
class Universidad {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllUniversidades() {
        $this->db->query('SELECT * FROM universidad ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addUniversidad($data) {
        $this->db->query('INSERT INTO universidad (id, id_ANHOACADEMICO, nombre, ciudad, responsable, borrado) VALUES (:id, :id_ANHOACADEMICO, :nombre, :ciudad, :responsable, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':ciudad', $data['ciudad']);
        $this->db->bind(':responsable', $data['responsable']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findUniversidadById($id) {
        $this->db->query('SELECT * FROM universidad WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateUniversidad($data) {
        $this->db->query('UPDATE universidad SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, nombre = :nombre, ciudad = :ciudad, responsable = :responsable, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':ciudad', $data['ciudad']);
        $this->db->bind(':responsable', $data['responsable']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUniversidad($id) {
        $this->db->query('DELETE FROM universidad WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
