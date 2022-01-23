
<?php
class UserRoles extends Controller {
    public function __construct() {
        $this->userrolServicio = $this->service('UserRoless');
    }

    public function index() {
        $data = $this->userrolServicio->listarRolesdeUsuarios();

         $this->view('usersroles/index', $data);
    }

    public function create() {
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/usersroles");
        }
        $data = [
           'id_USUARIO' => '',
            'id_ROL' => '',
            'id_USUARIOError' => '',
            'id_ROLError' => ''
        ];
        if ($this->userrolServicio->crearRolesdeUsuarios()){
            header("Location: " . URLROOT . "/usersroles");
            }else {
                $this->view('usersroles/create', $data);
                }

                }

    public function update($id_USUARIO) {

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/usersroles");
}
        $data = [
            'userrol' => '',
            'id_USUARIO' => '',
            'id_ROL' => '',
            'id_USUARIOError' => '',
            'id_ROLError' => ''
        ];    
        if ($this->userrolServicio->actualizarRolesdeUsuarios($id_USUARIO)){
            header("Location: " . URLROOT . "/usersroles");
            }else {
                $this->view('usersroles/update', $data);
                }

                }

    public function delete($id_USUARIO) {

       
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/usersroles");
}
            if ($this->userrolServicio->eliminarRolesdeUsuario($id_USUARIO)){
            header("Location: " . URLROOT . "/usersroles");
            } else {
                die('Something went wrong!');
                }

                    }
}