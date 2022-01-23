<?php
class AsistenciaTutoria {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllAsistenciaTutoria() {
        $this->db->query('SELECT * FROM asistenciatutoria ORDER BY id_TUTORIA ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addAsistenciaTutoria($data) {
        $this->db->query('INSERT INTO asistenciatutoria (id_TUTORIA, id_HORARIO, asistencia, borrado) VALUES (:id_TUTORIA, :id_HORARIO, :asistencia, :borrado)');

        $this->db->bind(':id_TUTORIA', $data['id_TUTORIA']);
        $this->db->bind(':id_HORARIO', $data['id_HORARIO']);
        $this->db->bind(':asistencia', $data['asistencia']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findAsistenciaTutoriaById($id_TUTORIA) {
        $this->db->query('SELECT * FROM asistenciatutoria WHERE id_TUTORIA = :id_TUTORIA');

        $this->db->bind(':id_TUTORIA', $id_TUTORIA);

        $row = $this->db->single();

        return $row;
    }

    public function updateAsistenciaTutoria($data) {
        $this->db->query('UPDATE asistenciatutoria SET id_TUTORIA = :id_TUTORIA, id_HORARIO = :id_HORARIO, asistencia = :asistencia, borrado = :borrado WHERE id_TUTORIA = :id_TUTORIA');

        $this->db->bind(':id_TUTORIA', $data['id_TUTORIA']);
        $this->db->bind(':id_HORARIO', $data['id_HORARIO']);
        $this->db->bind(':asistencia', $data['asistencia']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAsistenciaTutoria($id_TUTORIA) {
        $this->db->query('DELETE FROM asistenciatutoria WHERE id_TUTORIA = :id_TUTORIA');

        $this->db->bind(':id_TUTORIA', $id_TUTORIA);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
