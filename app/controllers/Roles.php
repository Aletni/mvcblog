
<?php
class Roles extends Controller {
    public function __construct() {
        $this->rolServicio = $this->service('Roless');
    }

    public function index() {
        $data = $this->rolServicio->listarRoles();

         $this->view('roles/index', $data);
    }

    public function create() {
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/roles");
        }
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
        if ($this->rolServicio->crearRoles()){
            header("Location: " . URLROOT . "/roles");
            }else {
                $this->view('roles/create', $data);
                }

                }

    public function update($id) {

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/roles");
}
        $data = [
            'rol' => '',
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
        if ($this->rolServicio->actualizarRoles($id)){
            header("Location: " . URLROOT . "/roles");
            }else {
                $this->view('roles/update', $data);
                }

                }

    public function delete($id) {

       
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/roles");
}
            if ($this->rolServicio->eliminarRoles($id)){
            header("Location: " . URLROOT . "/roles");
            } else {
                die('Something went wrong!');
                }

                    }
}