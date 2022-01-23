<?php
class Espacio {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllEspacios() {
        $this->db->query('SELECT * FROM espacio ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addEspacio($data) {
        $this->db->query('INSERT INTO espacio (id, id_ANHOACADEMICO, id_EDIFICIO, nombre, tipo, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_EDIFICIO, :nombre, :tipo, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_EDIFICIO', $data['id_EDIFICIO']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':tipo', $data['ubicacion']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findEspacioById($id) {
        $this->db->query('SELECT * FROM espacio WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateEspacio($data) {
        $this->db->query('UPDATE espacio SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_EDIFICIO = :id_EDIFICIO, nombre = :nombre, tipo = :tipo, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_EDIFICIO', $data['id_EDIFICIO']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':tipo', $data['ubicacion']);
        $this->db->bind(':borrado', $data['borrado']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteEspacio($id) {
        $this->db->query('DELETE FROM espacio WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
