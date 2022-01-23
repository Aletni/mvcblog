<?php
class Titulacion {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllTitulaciones() {
        $this->db->query('SELECT * FROM titulacion ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addTitulacion($data) {
        $this->db->query('INSERT INTO titulacion (id, id_ANHOACADEMICO, id_CENTRO, codigo, nombre, responsable, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_CENTRO, :codigo, :nombre, :responsable, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_CENTRO', $data['id_CENTRO']);
        $this->db->bind(':codigo', $data['codigo']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':responsable', $data['responsable']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findTitulacionById($id) {
        $this->db->query('SELECT * FROM titulacion WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateTitulacion($data) {
        $this->db->query('UPDATE titulacion SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_CENTRO = :id_CENTRO, codigo = :codigo, nombre = :nombre, responsable = :responsable, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_CENTRO', $data['id_CENTRO']);
        $this->db->bind(':codigo', $data['codigo']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':responsable', $data['responsable']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTitulacion($id) {
        $this->db->query('DELETE FROM titulacion WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
