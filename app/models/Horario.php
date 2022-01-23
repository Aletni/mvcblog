<?php
class Horario {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllHorarios() {
        $this->db->query('SELECT * FROM horario ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addHorario($data) {
        $this->db->query('INSERT INTO horario (id, id_ANHOACADEMICO, id_ESPACIO, id_GRUPO, fecha, hora_inicio, hora_fin, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_ESPACIO, :id_GRUPO, :fecha, :hora_inicio, :hora_fin, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_ESPACIO', $data['id_ESPACIO']);
        $this->db->bind(':id_GRUPO', $data['id_GRUPO']);
        $this->db->bind(':fecha', $data['fecha']);
        $this->db->bind(':hora_inicio', $data['hora_inicio']);
        $this->db->bind(':hora_fin', $data['hora_fin']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findHorarioById($id) {
        $this->db->query('SELECT * FROM horario WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateHorario($data) {
        $this->db->query('UPDATE horario SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_ESPACIO = :id_ESPACIO, id_GRUPO = :id_GRUPO, fecha = :fecha, hora_inicio = :hora_inicio, hora_fin = :hora_fin, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_ESPACIO', $data['id_ESPACIO']);
        $this->db->bind(':id_GRUPO', $data['id_GRUPO']);
        $this->db->bind(':fecha', $data['fecha']);
        $this->db->bind(':hora_inicio', $data['hora_inicio']);
        $this->db->bind(':hora_fin', $data['hora_fin']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteHorario($id) {
        $this->db->query('DELETE FROM horario WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
