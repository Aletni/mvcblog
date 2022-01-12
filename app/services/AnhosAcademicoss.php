<?php
class AnhosAcademicoss{

    public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

    public function __construct() {
        $this->añoModel = $this->model('Anhoacademico');
    }

    public function listarAñosAcademicos() {
        $anhoacademico = $this->añoModel->findAllAnhosAcademicos();

        $data = [
            'anhoacademico' => $anhoacademico
        ];

        return $data;
    }
public function crearAñosAcademicos() {

$data = [
            'id' => '',
            'borrado' => '',
            'idError' => '',
            'borradoError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                //'user_id' => $_SESSION['user_id'],
                'id' => trim($_POST['id']),
                'borrado' => trim($_POST['borrado']),
                'idError' => '',
                'borradoError' => ''
            ];

            if(empty($data['id'])) {
                $data['idError'] = 'El id de una anhoacademico no puede ser vacio';
            }


            if($data['borrado' ] != 0 && $data['borrado'] != 1   ) {
                $data['borradoError'] = 'El borrado de una anhoacademico no puede ser distinto de 0 o 1';
            }


            if (empty($data['idError']) && empty($data['borradoError'])) {
                if ($this->añoModel->addAnhoAcademico($data)) {
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



    

    public function actualizarAñosAcademicos($id) {

        $anhoacademico = $this->añoModel->findAnhoAcademicoById($id);

        $data = [
            'anhoacademico' => $anhoacademico,
            'id' => '',
            'borrado' => '',
            'idError' => '',
            'borradoError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'anhoacademico' => $anhoacademico,
                'borrado' => trim($_POST['borrado']),
                'idError' => '',
                'borradoError' => ''
            ];

           if($data['borrado'] != 0  && $data['borrado'] != 1   ) {
                $data['borradoError'] = 'El borrado de una anhoacademico no puede ser distinto de 0 o 1';
            }

            if (empty($data['borradoError']) ) {
                if ($this->añoModel->updateAnhoAcademico($data)) {
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

    public function eliminarAñosAcademicos($id) {

    $anhoacademico = $this->añoModel->findAnhoAcademicoById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/anhoacademicoes");
        } //elseif($post->user_id != $_SESSION['user_id']){
           // header("Location: " . URLROOT . "/posts");
       // }

        $data = [
            'anhoacademico' => $anhoacademico,
            'id' => '',
            'borrado' => '',
            'idError' => '',
            'borradoError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->añoModel->deleteAnhoAcademico($id)) {
                    return true;
            } else {
               return false;
            }
        }
    }
    }