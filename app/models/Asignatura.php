<?php
class Asignatura {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllAsignaturas() {
        $this->db->query('SELECT * FROM asignatura ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addAsignatura($data) {
        $this->db->query('INSERT INTO asignatura (id, id_ANHOACADEMICO, id_TITULACION, id_DEPARTAMENTO, id_PROFESOR, codigo, nombre, creditos, tipo, horas, cuatrimestre, borrado) VALUES (:id, :id_ANHOACADEMICO, :id_TITULACION, :id_DEPARTAMENTO, :id_PROFESOR, :codigo, :nombre, :creditos, :tipo, :horas, :cuatrimestre, :borrado)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_TITULACION', $data['id_TITULACION']);
        $this->db->bind(':id_DEPARTAMENTO', $data['id_DEPARTAMENTO']);
        $this->db->bind(':id_PROFESOR', $data['id_PROFESOR']);
        $this->db->bind(':codigo', $data['codigo']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':creditos', $data['creditos']);
        $this->db->bind(':tipo', $data['tipo']);
        $this->db->bind(':horas', $data['horas']);
        $this->db->bind(':cuatrimestre', $data['cuatrimestre']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findAsignaturaById($id) {
        $this->db->query('SELECT * FROM asignatura WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateAsignatura($data) {
        $this->db->query('UPDATE asignatura SET id = :id, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_TITULACION = :id_TITULACION, id_DEPARTAMENTO = :id_DEPARTAMENTO, id_PROFESOR = :id_PROFESOR, codigo = :codigo, nombre = :nombre, creditos = :creditos, tipo = :tipo, horas = :horas, cuatrimestre = :cuatrimestre, borrado = :borrado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_TITULACION', $data['id_TITULACION']);
        $this->db->bind(':id_DEPARTAMENTO', $data['id_DEPARTAMENTO']);
        $this->db->bind(':id_PROFESOR', $data['id_PROFESOR']);
        $this->db->bind(':codigo', $data['codigo']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':creditos', $data['creditos']);
        $this->db->bind(':tipo', $data['tipo']);
        $this->db->bind(':horas', $data['horas']);
        $this->db->bind(':cuatrimestre', $data['cuatrimestre']);

        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAsignatura($id) {
        $this->db->query('DELETE FROM asignatura WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}