<?php
class Centro {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllCentros() {
        $this->db->query('SELECT * FROM centro ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addCentro($data) {
        $this->db->query('INSERT INTO centro (id, id_ANHOACADEMICO, id_UNIVERSIDAD, nombre, ciudad, responsable, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_UNIVERSIDAD, :nombre, :ciudad, :responsable, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_UNIVERSIDAD', $data['id_UNIVERSIDAD']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':ciudad', $data['ciudad']);
        $this->db->bind(':responsable', $data['responsable']
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findCentroById($id) {
        $this->db->query('SELECT * FROM centro WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateCentro($data) {
        $this->db->query('UPDATE centro SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_UNIVERSIDAD = :id_UNIVERSIDAD, nombre = :nombre, ciudad = :ciudad, responsable = :responsable, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_UNIVERSIDAD', $data['id_UNIVERSIDAD']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':ciudad', $data['ciudad']);
        $this->db->bind(':responsable', $data['responsable']
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCentro($id) {
        $this->db->query('DELETE FROM centro WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
