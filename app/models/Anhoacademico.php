<?php
class Anhoacademico {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllAnhosAcademicos() {
        $this->db->query('SELECT * FROM anhoacademico ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addAnhoAcademico($data) {
        $this->db->query('INSERT INTO anhoacademico (id, borrado) VALUES (:id, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findAnhoAcademicoById($id) {
        $this->db->query('SELECT * FROM anhoacademico WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateAnhoAcademico($data) {
        $this->db->query('UPDATE anhoacademico SET id = :id, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAnhoAcademico($id) {
        $this->db->query('DELETE FROM anhoacademico WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}