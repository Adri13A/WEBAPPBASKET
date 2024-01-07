<?php
    //Admin
    require_once("../../config/conexion.php");
    class usuarios{
        private $PDO;

        public function __construct(){
            $con = new Conexion();
            $this->PDO = $con->open();
        }

        public function __destruct(){
        
            $this->PDO = NULL;
            
        }

        public function passwordEncrypt($password){
            $passwordEncrypted = password_hash($password, PASSWORD_DEFAULT);
            return $passwordEncrypted;
        }

        public function passwordDecrypted($passwordEncrypted, $passwordCandidate){
            return (password_verify($passwordCandidate,$passwordEncrypted))?true : false;
        }

        public function authenticateAdmin($usuario, $pass){
            //Declaramos el statement y preparamos la consulta
            $statement = "SELECT * FROM admin WHERE usuarioAdmin = :usuario";
            $consulta = $this->PDO->prepare($statement);
            $consulta->bindParam(':usuario', $usuario);
            $consulta->execute();
            if ($fila = $consulta->fetch()) {
                if($this->passwordDecrypted($fila['passwordAdmin'],$pass)!=false){
                $_SESSION['nombre'] = $fila['nombreAdmin'];
                return true;
                }
            } else {
                return false;
            }
        }

        public function authenticateOrganizador($usuario, $pass){
            $statement = "SELECT * FROM torneos WHERE usuarioOrganizador = :usuario";
            $consulta = $this->PDO->prepare($statement);
            $consulta->bindParam(':usuario', $usuario);
            $consulta->execute();
            if($fila = $consulta->fetch()) {
                if($this->passwordDecrypted($fila['contrasenaOrganizador'],$pass)!=false){
                $_SESSION['organizador'] = $fila['organizador'];
                $_SESSION['idTorneo'] = $fila['idTorneo'];
                $_SESSION['patrocinadores'] = $fila['patrocinadores'];
                $_SESSION['sede'] = $fila['sede'];
                $_SESSION['premio1erLugar'] = $fila['premio1erLugar'];
                $_SESSION['premio2doLugar'] = $fila['premio2doLugar'];
                $_SESSION['premio3erLugar'] = $fila['premio3erLugar'];
                $_SESSION['otroPremio'] = $fila['otroPremio'];
                $_SESSION['nombreTorneo'] = $fila['nombreTorneo'];
                return true;
                }
            } else {
                return false;
            }
        }

    }

?>