<?php
class UsuarioRol {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllUsuarioRoles() {
        $this->db->query('SELECT * FROM usuario_rol ORDER BY id_USUARIO ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addUsuarioRol($data) {
        $this->db->query('INSERT INTO usuario_rol (id_USUARIO, id_ROL) VALUES (:id_USUARIO, :id_ROL)');

        $this->db->bind(':id_USUARIO', $data['id_USUARIO']);
        $this->db->bind(':id_ROL', $data['id_ROL']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findUsuarioRolById($id_USUARIO) {
        $this->db->query('SELECT * FROM usuario_rol WHERE id_USUARIO = :id_USUARIO');

        $this->db->bind(':id_USUARIO', $id_USUARIO);

        $row = $this->db->single();

        return $row;
    }

    public function updateUsuarioRol($data) {
        $this->db->query('UPDATE usuario_rol SET id_USUARIO = :id_USUARIO, id_ROL = :id_ROL WHERE id_USUARIO = :id_USUARIO');

        $this->db->bind(':id_USUARIO', $data['id_USUARIO']);
        $this->db->bind(':id_ROL', $data['id_ROL']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUsuarioRol($id_USUARIO) {
        $this->db->query('DELETE FROM usuario_rol WHERE id_USUARIO = :id_USUARIO');

        $this->db->bind(':id_USUARIO', $id_USUARIO);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
