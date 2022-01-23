<?php
class AsistenciaDocencia {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllAsistenciaDocente() {
        $this->db->query('SELECT * FROM asistenciadocencia ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addAsistenciaDocente($data) {
        $this->db->query('INSERT INTO asistenciadocencia (id, id_ANHOACADEMICO, id_PROFESOR, id_HORARIO, id_GRUPO, asistencia, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_PROFESOR, :id_HORARIO, :id_GRUPO, :asistencia, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_PROFESOR', $data['id_PROFESOR']);
        $this->db->bind(':id_HORARIO', $data['id_HORARIO']);
        $this->db->bind(':id_GRUPO', $data['id_GRUPO']);
        $this->db->bind(':asistencia', $data['asistencia']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findAsistenciaDocenteById($id) {
        $this->db->query('SELECT * FROM asistenciadocencia WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateAsistenciaDocente($data) {
        $this->db->query('UPDATE asistenciadocencia SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_PROFESOR = :id_PROFESOR, id_HORARIO = :id_HORARIO, id_GRUPO = :id_GRUPO, asistencia = :asistencia, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_PROFESOR', $data['id_PROFESOR']);
        $this->db->bind(':id_HORARIO', $data['id_HORARIO']);
        $this->db->bind(':id_GRUPO', $data['id_GRUPO']);
        $this->db->bind(':asistencia', $data['asistencia']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAsistenciaDocente($id) {
        $this->db->query('DELETE FROM asistenciadocencia WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
