<?php
class Asignaturass{

    public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

    public function __construct() {
        $this->asignaturaModel = $this->model('Asignatura');
    }

    public function listarAsignaturas() {
        $asignatura = $this->asignaturaModel->findAllAsignaturas();

        $data = [
            'asignatura' => $asignatura
        ];

        return $data;
    }
public function crearAsignaturas() {

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

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                //'user_id' => $_SESSION['user_id'],
                'id' => trim($_POST['id']),
                'id_ANHOACADEMICO' => trim($_POST['id_ANHOACADEMICO']),
                'id_TITULACION' => trim($_POST['id_TITULACION']),
                'id_DEPARTAMENTO' => trim($_POST['id_DEPARTAMENTO']),
                'id_PROFESOR' => trim($_POST['id_PROFESOR']),
                'codigo' => trim($_POST['codigo']),
                'nombre' => trim($_POST['nombre']),
                'creditos' => trim($_POST['creditos']),
                'tipo' => trim($_POST['tipo']),
                'horas' => trim($_POST['horas']),
                'cuatrimestre' => trim($_POST['cuatrimestre']),
                'borrado' => trim($_POST['borrado']),
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

            if(empty($data['id'])) {
                $data['idError'] = 'El id de una asignatura no puede ser vacio';
            }
            if(empty($data['id_ANHOACADEMICO'])) {
                $data['id_ANHOACADEMICOError'] = 'El id del año academico no puede ser vacio';
            }
            if(empty($data['id_TITULACION'])) {
                $data['id_TITULACIONError'] = 'El id de la titulacion no puede ser vacio';
            }
            if(empty($data['id_DEPARTAMENTO'])) {
                $data['id_DEPARTAMENTOError'] = 'El id de un departamento no puede ser vacio';
            }
            if(empty($data['id_PROFESOR'])) {
                $data['id_PROFESORError'] = 'El id del profesor no puede ser vacio';
            }
            if(empty($data['codigo'])) {
                $data['codigoError'] = 'El codigo de una asignatura no puede ser vacio';
            }
            if(empty($data['nombre'])) {
                $data['nombreError'] = 'El nombre de una asignatura no puede ser vacio';
            }
            if(empty($data['creditos'])) {
                $data['creditosError'] = 'Los creditos de una asignatura no puede ser vacio';
            }
            if(empty($data['tipo'])) {
                $data['tipoError'] = 'El tipo de una asignatura no puede ser vacio';
            }
            if(empty($data['horas'])) {
                $data['horasError'] = 'Las horas de una asignatura no puede ser vacio';
            }
            if(empty($data['cuatrimestre'])) {
                $data['cuatrimestreError'] = 'El cuatrimestre de una asignatura no puede ser vacio';
            }


            if($data['borrado' ] != 0 && $data['borrado'] != 1   ) {
                $data['borradoError'] = 'El borrado de una asignatura no puede ser distinto de 0 o 1';
            }


            if (empty($data['idError']) && empty($data['id_ANHOACADEMICOError']) && empty($data['id_TITULACIONError']) && empty($data['id_DEPARTAMENTOError']) && empty($data['id_PROFESORError']) && empty($data['codigoError']) && empty($data['nombreError']) && empty($data['creditosError']) && empty($data['tipoError']) && empty($data['horasError']) && empty($data['cuatrimestreError'])&& empty($data['borradoError'])) {
                if ($this->asignaturaModel->addAsignatura($data)) {
                    return true;
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                return false;
            }
        }

        return false;
    }



    

    public function actualizarAsignaturas($id) {

        $asignatura = $this->asignaturaModel->findAsignaturaById($id);

        $data = [
            'asignatura' => $asignatura,
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

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'asignatura' => $asignatura,
                'id_ANHOACADEMICO' => trim($_POST['id_ANHOACADEMICO']),
                'id_TITULACION' => trim($_POST['id_TITULACION']),
                'id_DEPARTAMENTO' => trim($_POST['id_DEPARTAMENTO']),
                'id_PROFESOR' => trim($_POST['id_PROFESOR']),
                'codigo' => trim($_POST['codigo']),
                'nombre' => trim($_POST['nombre']),
                'creditos' => trim($_POST['creditos']),
                'tipo' => trim($_POST['tipo']),
                'horas' => trim($_POST['horas']),
                'cuatrimestre' => trim($_POST['cuatrimestre']),
                'borrado' => trim($_POST['borrado']),
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

          if(empty($data['id_ANHOACADEMICO'])) {
                $data['id_ANHOACADEMICOError'] = 'El id del año academico no puede ser vacio';
            }
            if(empty($data['id_TITULACION'])) {
                $data['id_TITULACIONError'] = 'El id de la titulacion no puede ser vacio';
            }
            if(empty($data['id_DEPARTAMENTO'])) {
                $data['id_DEPARTAMENTOError'] = 'El id de un departamento no puede ser vacio';
            }
            if(empty($data['id_PROFESOR'])) {
                $data['id_PROFESORError'] = 'El id del profesor no puede ser vacio';
            }
            if(empty($data['codigo'])) {
                $data['codigoError'] = 'El codigo de una asignatura no puede ser vacio';
            }
            if(empty($data['nombre'])) {
                $data['nombreError'] = 'El nombre de una asignatura no puede ser vacio';
            }
            if(empty($data['creditos'])) {
                $data['creditosError'] = 'Los creditos de una asignatura no puede ser vacio';
            }
            if(empty($data['tipo'])) {
                $data['tipoError'] = 'El tipo de una asignatura no puede ser vacio';
            }
            if(empty($data['horas'])) {
                $data['horasError'] = 'Las horas de una asignatura no puede ser vacio';
            }
            if(empty($data['cuatrimestre'])) {
                $data['cuatrimestreError'] = 'El cuatrimestre de una asignatura no puede ser vacio';
            }


            if($data['borrado' ] != 0 && $data['borrado'] != 1   ) {
                $data['borradoError'] = 'El borrado de una asignatura no puede ser distinto de 0 o 1';
            }


            if (empty($data['id_ANHOACADEMICOError']) && empty($data['id_TITULACIONError']) && empty($data['id_DEPARTAMENTOError']) && empty($data['id_PROFESORError']) && empty($data['codigoError']) && empty($data['nombreError']) && empty($data['creditosError']) && empty($data['tipoError']) && empty($data['horasError']) && empty($data['cuatrimestreError'])&& empty($data['borradoError'])) {
                if ($this->asignaturaModel->updateAsignatura($data)) {
                    return true;
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                return false;
            }
        }

        return false;


    }

    public function eliminarAsignaturas($id) {

    $asignatura = $this->asignaturaModel->findAsignaturaById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/asignaturas");
        } //elseif($post->user_id != $_SESSION['user_id']){
           // header("Location: " . URLROOT . "/posts");
       // }

        $data = [
            'asignatura' => $asignatura,
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

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->asignaturaModel->deleteAsignatura($id)) {
                    return true;
            } else {
               return false;
            }
        }
    }
    }