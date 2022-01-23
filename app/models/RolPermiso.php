<?php
class RolesPermiso {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllRolesPermiso() {
        $this->db->query('SELECT * FROM rol_permiso ORDER BY id_ROL ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addRolPermiso($data) {
        $this->db->query('INSERT INTO rol_permiso (id_ROL, id_FUNCIONALIDAD, id_ACCION) VALUES (:id_ROL, :id_FUNCIONALIDAD, :id_ACCION)');

        $this->db->bind(':id_ROL', $data['id_ROL']);
        $this->db->bind(':id_FUNCIONALIDAD', $data['id_FUNCIONALIDAD']);
        $this->db->bind(':id_ACCION', $data['id_ACCION']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findRolPermisoById($id_ROL) {
        $this->db->query('SELECT * FROM rol_permiso WHERE id_ROL = :id_ROL');

        $this->db->bind(':id_ROL', $id_ROL);

        $row = $this->db->single();

        return $row;
    }

    public function updateRolPermiso($data) {
        $this->db->query('UPDATE rol_permiso SET id_ROL = :id_ROL, id_FUNCIONALIDAD = :id_FUNCIONALIDAD, id_ACCION = :id_ACCION WHERE id_ROL = :id_ROL');

        $this->db->bind(':id_ROL', $data['id_ROL']);
        $this->db->bind(':id_FUNCIONALIDAD', $data['id_FUNCIONALIDAD']);
        $this->db->bind(':id_ACCION', $data['id_ACCION']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRolPermiso($id_ROL) {
        $this->db->query('DELETE FROM rol_permiso WHERE id_ROL = :id_ROL');

        $this->db->bind(':id_ROL', $id_ROL);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
