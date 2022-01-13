
<?php
class Asignaturas extends Controller {
    public function __construct() {
        $this->asignaturaServicio = $this->service('Asignaturass');
    }

    public function index() {
        $data = $this->asignaturaServicio->listarAsignaturas();

         $this->view('asignaturas/index', $data);
    }

    public function create() {
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/asignaturas");
        }
        $data = [
            'id' => '',
            'id_ANHOACADEMICO' => '',
            'id_TITULACION' => '',
            'id_DEPARTAMENTO' => '',
            'id_PROFESOR' => '',
            'codigo' => '',
            'nombre' => '',
            'creditos' => '',
            'tipo' => '',
            'horas' => '',
            'cuatrimestre' => '',
            'borrado' => '',
            'idError' => '',
            'id_ANHOACADEMICOError' => '',
            'id_TITULACIONError' => '',
            'id_DEPARTAMENTOError' => '',
            'id_PROFESORError' => '',
            'codigoError' => '',
            'nombreError' => '',
            'creditosError' => '',
            'tipoError' => '',
            'horasError' => '',
            'cuatrimestreError' => '',
            'borradoError' => ''
        ];
        if ($this->asignaturaServicio->crearAsignaturas()){
            header("Location: " . URLROOT . "/asignaturas");
            }else {
                $this->view('asignaturas/create', $data);
                }

                }

    public function update($id) {

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/asignaturas");
}
        $data = [
            'asignatura' => '',
            'id' => '',
            'id_ANHOACADEMICO' => '',
            'id_TITULACION' => '',
            'id_DEPARTAMENTO' => '',
            'id_PROFESOR' => '',
            'codigo' => '',
            'nombre' => '',
            'creditos' => '',
            'tipo' => '',
            'horas' => '',
            'cuatrimestre' => '',
            'borrado' => '',
            'idError' => '',
            'id_ANHOACADEMICOError' => '',
            'id_TITULACIONError' => '',
            'id_DEPARTAMENTOError' => '',
            'id_PROFESORError' => '',
            'codigoError' => '',
            'nombreError' => '',
            'creditosError' => '',
            'tipoError' => '',
            'horasError' => '',
            'cuatrimestreError' => '',
            'borradoError' => ''
        ];    
        if ($this->asignaturaServicio->actualizarAsignaturas($id)){
            header("Location: " . URLROOT . "/asignaturas");
            }else {
                $this->view('asignaturas/update', $data);
                }

                }

    public function delete($id) {

       
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/asignaturas");
}
            if ($this->asignaturaServicio->eliminarAsignaturas($id)){
            header("Location: " . URLROOT . "/asignaturas");
            } else {
                die('Something went wrong!');
                }

                    }
}