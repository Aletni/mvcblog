<?php
class Tutoria {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllTutorias() {
        $this->db->query('SELECT * FROM tutoria ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addTutoria($data) {
        $this->db->query('INSERT INTO tutoria (id, id_ANHOACADEMICO, fecha, horario, id_PROFESOR, borrado) VALUES (:id, :id_ANHOACADEMICO, :fecha, :horario, :id_PROFESOR, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':fecha', $data['fecha']);
        $this->db->bind(':horario', $data['horario']);
        $this->db->bind(':id_PROFESOR', $data['id_PROFESOR']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findTutoriaById($id) {
        $this->db->query('SELECT * FROM tutoria WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateTutoria($data) {
        $this->db->query('UPDATE tutoria SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, fecha = :fecha, horario = :horario, id_PROFESOR = :id_PROFESOR, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':fecha', $data['fecha']);
        $this->db->bind(':horario', $data['horario']);
        $this->db->bind(':id_PROFESOR', $data['id_PROFESOR']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTutoria($id) {
        $this->db->query('DELETE FROM tutoria WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
