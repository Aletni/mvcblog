<?php
class Funcionalidadess{

    public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

    public function __construct() {
        $this->funcionalidadModel = $this->model('Funcionalidad');
    }

    public function listarFuncionalidades() {
        $funcionalidad = $this->funcionalidadModel->findAllFuncionalidades();

        $data = [
            'funcionalidad' => $funcionalidad
        ];

        return $data;
    }
public function crearFuncionalidades() {

$data = [
            'id' => '',
            'nombre' => '',
            'descripcion' => '',
            'borrado' => '',
            'idError' => '',
            'nombreError' => '',
            'descripcionError' => '',
            'borradoError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                //'user_id' => $_SESSION['user_id'],
                'id' => trim($_POST['id']),
                'nombre' => trim($_POST['nombre']),
                'descripcion' => trim($_POST['descripcion']),
                'borrado' => trim($_POST['borrado']),
                'idError' => '',
                'nombreError' => '',
                'descripcionError' => '',
                'borradoError' => ''
            ];

            if(empty($data['id'])) {
                $data['idError'] = 'El id de una funcionalidad no puede ser vacio';
            }

            if(empty($data['nombre'])) {
                $data['nombreError'] = 'El nombre de una funcionalidad no puede ser vacio';
            }
            if(empty($data['descripcion'])) {
                $data['descripcionError'] = 'La descripcion de una funcionalidad no puede ser vacio';
            }

            if($data['borrado' ] != 0 && $data['borrado'] != 1   ) {
                $data['borradoError'] = 'El borrado de una funcionalidad no puede ser distinto de 0 o 1';
            }


            if (empty($data['idError']) && empty($data['nombreError']) && empty($data['descripcionError']) && empty($data['borradoError'])) {
                if ($this->funcionalidadModel->addFuncionalidad($data)) {
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



    

    public function actualizarFuncionalidades($id) {

        $funcionalidad = $this->funcionalidadModel->findFuncionalidadById($id);

        $data = [
            'funcionalidad' => $funcionalidad,
            'id' => '',
            'nombre' => '',
            'descripcion' => '',
            'borrado' => '',
            'idError' => '',
            'nombreError' => '',
            'descripcionError' => '',
            'borradoError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'funcionalidad' => $funcionalidad,
                'nombre' => trim($_POST['nombre']),
                'descripcion' => trim($_POST['descripcion']),
                'borrado' => trim($_POST['borrado']),
                'idError' => '',
                'nombreError' => '',
                'descripcionError' => '',
                'borradoError' => ''
            ];

            if(empty($data['nombre'])) {
                $data['nombreError'] = 'El nombre de una funcionalidad no puede ser vacio';
            }

            if(empty($data['descripcion'])) {
                $data['descripcionError'] = 'La descripcion de una funcionalidad no puede ser vacio';
            }
           if($data['borrado'] != 0  && $data['borrado'] != 1   ) {
                $data['borradoError'] = 'El borrado de una funcionalidad no puede ser distinto de 0 o 1';
            }

            if($data['nombre'] == $this->accionModel->findFuncionalidadById($id)->nombre) {
                $data['nombreError'] == 'Pero cambiale el nombre';
            }

            if($data['descripcion'] == $this->accionModel->findFuncionalidadById($id)->descripcion) {
                $data['descripcionError'] == 'Pero cambiale la descripcion';
            }


            if (empty($data['nombreError']) && empty($data['descripcionError']) && empty($data['borradoError']) ) {
                if ($this->funcionalidadModel->updateFuncionalidad($data)) {
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

    public function eliminarFuncionalidades($id) {

    $funcionalidad = $this->funcionalidadModel->findFuncionalidadById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/acciones");
        } //elseif($post->user_id != $_SESSION['user_id']){
           // header("Location: " . URLROOT . "/posts");
       // }

        $data = [
            'funcionalidad' => $funcionalidad,
            'id' => '',
            'nombre' => '',
            'descripcion' => '',
            'borrado' => '',
            'idError' => '',
            'nombreError' => '',
            'descripcionError' => '',
            'borradoError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->funcionalidadModel->deleteFuncionalidad($id)) {
                    return true;
            } else {
               return false;
            }
        }
    }
    }