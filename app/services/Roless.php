<?php
class Roless{

    public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

    public function __construct() {
        $this->rolModel = $this->model('Rol');
    }

    public function listarRoles() {
        $rol = $this->rolModel->findAllRoles();

        $data = [
            'rol' => $rol
        ];

        return $data;
    }
public function crearRoles() {

$data = [
            'id' => '',
            'nombre' => '',
            'borrado' => '',
            'res_centro' => '',
            'res_titulacion' => '',
            'res_asignatura' => '',
            'res_universidad' => '',
            'idError' => '',
            'nombreError' => '',
            'borradoError' => '',
            'res_centroError' => '',
            'res_titulacionError' => '',
            'res_asignaturaError' => '',
            'res_universidadError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                //'user_id' => $_SESSION['user_id'],
                'id' => trim($_POST['id']),
                'nombre' => trim($_POST['nombre']),
                'borrado' => trim($_POST['borrado']),
                'res_centro' => trim($_POST['res_centro']),
                'res_titulacion' => trim($_POST['res_titulacion']),
                'res_asignatura' => trim($_POST['res_asignatura']),
                'res_universidad' => trim($_POST['res_universidad']),
                'idError' => '',
            'nombreError' => '',
            'borradoError' => '',
            'res_centroError' => '',
            'res_titulacionError' => '',
            'res_asignaturaError' => '',
            'res_universidadError' => ''
            ];

            if(empty($data['id'])) {
                $data['idError'] = 'El id de una asignatura no puede ser vacio';
            }
            if(empty($data['nombre'])) {
                $data['nombreError'] = 'El nombre no puede ser vacio';
            }
            if(empty($data['borrado'])) {
                $data['borradoError'] = 'El borrado no puede ser vacio';
            }
            if(empty($data['res_centro'])) {
                $data['res_centroError'] = 'El res_centro no puede ser vacio';
            }
            if(empty($data['res_titulacion'])) {
                $data['res_titulacionError'] = 'El res_titulacion no puede ser vacio';
            }
            if(empty($data['res_asignatura'])) {
                $data['res_asignaturaError'] = 'El cres_asignatura no puede ser vacio';
            }
            if(empty($data['res_universidad'])) {
                $data['res_universidadError'] = 'El res_universidad no puede ser vacio';


            if($data['borrado' ] != 0 && $data['borrado'] != 1   ) {
                $data['borradoError'] = 'El borrado no puede ser distinto de 0 o 1';
            }


            if (empty($data['idError']) && empty($data['nombreError']) && empty($data['borradoError']) && empty($data['res_centroError']) && empty($data['res_titulacionError']) && empty($data['res_asignaturaError']) && empty($data['res_universidadError'])&& empty($data['borradoError'])) {
                if ($this->rolModel->addRol($data)) {
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
    }




    

    public function actualizarRoles($id) {

        $rol = $this->rolModel->findRolById($id);

        $data = [
            'rol' => $rol,
             'id' => '',
            'nombre' => '',
            'borrado' => '',
            'res_centro' => '',
            'res_titulacion' => '',
            'res_asignatura' => '',
            'res_universidad' => '',
            'idError' => '',
            'nombreError' => '',
            'borradoError' => '',
            'res_centroError' => '',
            'res_titulacionError' => '',
            'res_asignaturaError' => '',
            'res_universidadError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'rol' => $rol,
                'nombre' => trim($_POST['nombre']),
                'borrado' => trim($_POST['borrado']),
                'res_centro' => trim($_POST['res_centro']),
                'res_titulacion' => trim($_POST['res_titulacion']),
                'res_asignatura' => trim($_POST['res_asignatura']),
                'res_universidad' => trim($_POST['res_universidad']),
                'idError' => '',
                 'nombreError' => '',
                'borradoError' => '',
                'res_centroError' => '',
                'res_titulacionError' => '',
                'res_asignaturaError' => '',
                'res_universidadError' => ''
            ];

          if(empty($data['id'])) {
                $data['idError'] = 'El id de una asignatura no puede ser vacio';
            }
            if(empty($data['nombre'])) {
                $data['nombreError'] = 'El nombre no puede ser vacio';
            }
            if(empty($data['borrado'])) {
                $data['borradoError'] = 'El borrado no puede ser vacio';
            }
            if(empty($data['res_centro'])) {
                $data['res_centroError'] = 'El res_centro no puede ser vacio';
            }
            if(empty($data['res_titulacion'])) {
                $data['res_titulacionError'] = 'El res_titulacion no puede ser vacio';
            }
            if(empty($data['res_asignatura'])) {
                $data['res_asignaturaError'] = 'El cres_asignatura no puede ser vacio';
            }
            if(empty($data['res_universidad'])) {
                $data['res_universidadError'] = 'El res_universidad no puede ser vacio';


            if($data['borrado' ] != 0 && $data['borrado'] != 1   ) {
                $data['borradoError'] = 'El borrado  no puede ser distinto de 0 o 1';
            }


            if (empty($data['idError']) && empty($data['nombreError']) && empty($data['borradoError']) && empty($data['res_centroError']) && empty($data['res_titulacionError']) && empty($data['res_asignaturaError']) && empty($data['res_universidadError'])&& empty($data['borradoError'])) {
                if ($this->rolModel->updateRol($data)) {
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
}

    public function eliminarRoles($id) {

    $rol = $this->rolModel->findRolById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/asignaturas");
        } //elseif($post->user_id != $_SESSION['user_id']){
           // header("Location: " . URLROOT . "/posts");
       // }

        $data = [
            'rol' => $rol,
             'id' => '',
            'nombre' => '',
            'borrado' => '',
            'res_centro' => '',
            'res_titulacion' => '',
            'res_asignatura' => '',
            'res_universidad' => '',
            'idError' => '',
            'nombreError' => '',
            'borradoError' => '',
            'res_centroError' => '',
            'res_titulacionError' => '',
            'res_asignaturaError' => '',
            'res_universidadError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->rolModel->deleteRol($id)) {
                    return true;
            } else {
               return false;
            }
        }
    }
    }