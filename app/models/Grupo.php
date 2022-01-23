<?php
class Grupo {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllGrupos() {
        $this->db->query('SELECT * FROM grupo ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addGrupo($data) {
        $this->db->query('INSERT INTO grupo (id, id_ANHOACADEMICO, id_ASIGNATURA, id_PROFESOR, codigo, nombre, tipo, horas, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_ASIGNATURA, :id_PROFESOR, :codigo, :nombre, :tipo, :horas, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_ASIGNATURA', $data['id_ASIGNATURA']);
        $this->db->bind(':id_PROFESOR', $data['id_PROFESOR']);
        $this->db->bind(':codigo', $data['codigo']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':tipo', $data['tipo']);
        $this->db->bind(':horas', $data['horas']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findGrupoById($id) {
        $this->db->query('SELECT * FROM grupo WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateGrupo($data) {
        $this->db->query('UPDATE grupo SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_ASIGNATURA = :id_ASIGNATURA, id_PROFESOR = :id_PROFESOR, codigo = :codigo, nombre = :nombre, tipo = :tipo, horas = :horas, borrado = :borrado WHERE id = :id');

         $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_ASIGNATURA', $data['id_ASIGNATURA']);
        $this->db->bind(':id_PROFESOR', $data['id_PROFESOR']);
        $this->db->bind(':codigo', $data['codigo']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':tipo', $data['tipo']);
        $this->db->bind(':horas', $data['horas']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteGrupo($id) {
        $this->db->query('DELETE FROM grupo WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
