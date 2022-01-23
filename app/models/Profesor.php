<?php
class Profesor {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllProfesores() {
        $this->db->query('SELECT * FROM profesor ORDER BY dni ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addProfesor($data) {
        $this->db->query('INSERT INTO profesor (dni, id_ANHOACADEMICO, id_DEPARTAMENTO, dedicacion, borrado) VALUES (:dni, :id_ANHOACADEMICO, :id_DEPARTAMENTO, :dedicacion, :borrado)');

        $this->db->bind(':dni', $data['dni']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_DEPARTAMENTO', $data['id_DEPARTAMENTO']);
        $this->db->bind(':dedicacion', $data['dedicacion']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findProfesorById($dni) {
        $this->db->query('SELECT * FROM profesor WHERE dni = :dni');

        $this->db->bind(':dni', $dni);

        $row = $this->db->single();

        return $row;
    }

    public function updateProfesor($data) {
        $this->db->query('UPDATE profesor SET dni = :dni, id_ANHOACADEMICO = :id_ANHOACADEMICO, id_DEPARTAMENTO = :id_DEPARTAMENTO, dedicacion = :dedicacion, borrado = :borrado WHERE dni = :dni');

        $this->db->bind(':dni', $data['dni']);
        $this->db->bind(':id_ANHOACADEMICO', $data['id_ANHOACADEMICO']);
        $this->db->bind(':id_DEPARTAMENTO', $data['id_DEPARTAMENTO']);
        $this->db->bind(':dedicacion', $data['dedicacion']);
        $this->db->bind(':borrado', $data['borrado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProfesor($dni) {
        $this->db->query('DELETE FROM profesor WHERE dni = :dni');

        $this->db->bind(':dni', $dni);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
