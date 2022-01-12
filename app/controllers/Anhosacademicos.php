<?php
class Anhosacademicos extends Controller {
    public function __construct() {
        $this->añoServicio = $this->service('AnhosAcademicoss');
    }

    public function index() {
        $data = $this->añoServicio->listarAñosAcademicos();

         $this->view('anhosacademicos/index', $data);
    }

    public function create() {
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/anhosacademicos");
        }
        $data = [
            'id' => '',
            'borrado' => '',
            'idError' => '',
            'borradoError' => ''
        ];
        if ($this->añoServicio->crearAñosAcademicos()){
            header("Location: " . URLROOT . "/anhosacademicos");
            }else {
                $this->view('anhosacademicos/create', $data);
                }

                }

    public function update($id) {

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/anhosacademicos");
}
        $data = [
            'anhoacademico' => '',
            'id' => '',
            'borrado' => '',
            'idError' => '',
            'borradoError' => ''
        ];    
        if ($this->añoServicio->actualizarAñosAcademicos($id)){
            header("Location: " . URLROOT . "/anhosacademicos");
            }else {
                $this->view('anhosacademicos/update', $data);
                }

                }

    public function delete($id) {

       
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/anhosacademicos");
}
            if ($this->añoServicio->eliminarAñosAcademicos($id)){
            header("Location: " . URLROOT . "/anhosacademicos");
            } else {
                die('Something went wrong!');
                }

                    }
}

