<?php
class TFG {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllTFG() {
        $this->db->query('SELECT * FROM tfg ORDER BY id_tfg ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addTFG($data) {
        $this->db->query('INSERT INTO tfg (id_tfg, titulo, dni_profesor) VALUES (:id_tfg, :titulo, :dni_profesor)');

        $this->db->bind(':id_tfg', $data['id_tfg']);
        $this->db->bind(':titulo', $data['titulo']);
        $this->db->bind(':dni_profesor', $data['dni_profesor']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findTFGById($id_tfg) {
        $this->db->query('SELECT * FROM tfg WHERE id_tfg = :id_tfg');

        $this->db->bind(':id_tfg', $id_tfg);

        $row = $this->db->single();

        return $row;
    }

    public function updateTFG($data) {
        $this->db->query('UPDATE tfg SET id_tfg = :id_tfg, titulo = :titulo, dni_profesor = :dni_profesor WHERE id_tfg = :id_tfg');

     $this->db->bind(':id_tfg', $data['id_tfg']);
        $this->db->bind(':titulo', $data['titulo']);
        $this->db->bind(':dni_profesor', $data['dni_profesor']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTFG($id_tfg) {
        $this->db->query('DELETE FROM tfg WHERE id_tfg = :id_tfg');

        $this->db->bind(':id_tfg', $id_tfg);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
