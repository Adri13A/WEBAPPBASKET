<?php

    require_once("../../models/usuarios.php");

    class usuariosController{
        private $model;

        function __construct(){
            $this->model = new usuarios();
        }

        public function authenticateUser($usuario, $pass){
            $admin = $this->model->authenticateAdmin($usuario, $pass);
            $organizador = $this->model->authenticateOrganizador($usuario, $pass);
            if($admin!=false){
                return header("Location: ../admin/admin.php");
            } else if ($organizador!=false){
                return header("Location: ../organizador/organizador.php");
            } else {
                return header("location: ../../index.php");
            }
        }

    }

?>