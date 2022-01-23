<?php
class UserRoless{

    public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

    public function __construct() {
        $this->usuarioRolModel = $this->model('UsuarioRol');
    }

    public function listarRolesdeUsuarios() {
        $userrol = $this->usuarioRolModel->findAllUsuarioRoles();

        $data = [
            'userrol' => $userrol
        ];

        return $data;
    }
public function crearRolesdeUsuarios() {

$data = [
            'id_USUARIO' => '',
            'id_ROL' => '',
            'id_USUARIOError' => '',
            'id_ROLError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                //'user_id' => $_SESSION['user_id'],
                'id_USUARIO' => trim($_POST['id_USUARIO']),
                'id_ROL' => trim($_POST['id_ROL']),
                'id_USUARIOError' => '',
                     'id_ROLError' => ''
            ];

            if(empty($data['id_USUARIO'])) {
                $data['id_USUARIOError'] = 'El id de una asignatura no puede ser vacio';
            }
            if(empty($data['id_ROL'])) {
                $data['id_ROLError'] = 'El nombre no puede ser vacio';
            }


            if (empty($data['id_USUARIOError']) && empty($data['id_ROLError'])) {
                if ($this->usuarioRolModel->addUsuarioRol($data)) {
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



    public function actualizarRolesdeUsuarios($id_USUARIO) {

        $userrol = $this->rolModel->findUsuarioRolById($id_USUARIO);

        $data = [
            'userrol' => $userrol,
             'id_USUARIO' => '',
            'id_ROL' => '',
            'id_USUARIOError' => '',
            'id_ROLError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id_USUARIO' => $id_USUARIO,
                'userrol' => $userrol,
                'id_ROL' => trim($_POST['id_ROL']),
                'id_USUARIOError' => '',
                     'id_ROLError' => ''
            ];
            ];

          if(empty($data['id_USUARIO'])) {
                $data['id_USUARIOError'] = 'El id de una asignatura no puede ser vacio';
            }
            if(empty($data['id_ROL'])) {
                $data['id_ROLError'] = 'El nombre no puede ser vacio';
            }


            if (empty($data['id_USUARIOError']) && empty($data['id_ROLError'])) {
                if ($this->usuarioRolModel->updateUsuarioRol($data)) {
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

    public function eliminarRolesdeUsuario($id_USUARIO) {

    $userrol = $this->usuarioRolModel->findUsuarioRolById($id_USUARIO);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/usersrol");
        } //elseif($post->user_id != $_SESSION['user_id']){
           // header("Location: " . URLROOT . "/posts");
       // }

        $data = [
             'userrol' => $userrol,
             'id_USUARIO' => '',
            'id_ROL' => '',
            'id_USUARIOError' => '',
            'id_ROLError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->usuarioRolModel->deleteUsuarioRol($id_USUARIO)) {
                    return true;
            } else {
               return false;
            }
        }
    }
    }