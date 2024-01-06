<?php
    //Usuarios
    require_once("../../config/conexion.php");
    class torneos{
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

        public function insert($nombreTorneo, $organizador, $patrocinadores, $sede , $premio1, $premio2,
        $premio3, $otroPremio, $usuario, $pass){
            //Encriptar contraseña
            $pass = $this->passwordEncrypt($pass);
            //Declaramos el statement y preparamos la consulta
            $statement = "INSERT INTO torneos
            VALUES (NULL, :nombreTorneo, :patrocinadores, :organizador, :sede, :premio1, 
            :premio2, :premio3, :otroPremio, :usuario, :pass)";
            $query = $this->PDO->prepare($statement);
            //Asociamos los valores colocados como placeholder en el query mediante bindParam()
            $query->bindParam(":nombreTorneo", $nombreTorneo);
            $query->bindParam(":organizador", $organizador);
            $query->bindParam(":patrocinadores", $patrocinadores);
            $query->bindParam(":sede", $sede);
            $query->bindParam(":premio1", $premio1);
            $query->bindParam(":premio2", $premio2);
            $query->bindParam(":premio3", $premio3);
            $query->bindParam(":otroPremio", $otroPremio);
            $query->bindParam(":usuario", $usuario);
            $query->bindParam(":pass", $pass);
            //Ejecutar statement con execute(). Valoraremos mediante un ternario lo que regresará el método insert
            return ($query->execute())?true : false ;
        }

        //Método para listar TODOS los torneos
        public function read(){
            $statement = "SELECT * FROM torneos";
            $query = $this->PDO->prepare($statement);
            return ($query->execute())? $query->fetchAll() : false;
        }

        //Método para devolver info de un solo torneo
        public function readOne($id){
            $statement = "SELECT * FROM torneos WHERE idTorneo = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);
            return ($query->execute())? $query->fetch() : false;
        }

        //Método para actualizar los datos del torneo
        public function update($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $premio1, $premio2,
        $premio3, $otroPremio){
            //Declaramos el statement y preparamos la consulta
            $statement = "UPDATE torneos
            SET nombreTorneo = :nombreTorneo, organizador= :organizador, patrocinadores =:patrocinadores,
            sede = :sede, premio1erLugar =:premio1, 
            premio2doLugar = :premio2, premio3erLugar = :premio3, otroPremio= :otroPremio
            WHERE idTorneo= :id";
            $query = $this->PDO->prepare($statement);
            //Asociamos los valores colocados como placeholder en el query mediante bindParam()
            $query->bindParam(":id", $id);
            $query->bindParam(":nombreTorneo", $nombreTorneo);
            $query->bindParam(":organizador", $organizador);
            $query->bindParam(":patrocinadores", $patrocinadores);
            $query->bindParam(":sede", $sede);
            //$query->bindParam(":categoria", $categoria);
            $query->bindParam(":premio1", $premio1);
            $query->bindParam(":premio2", $premio2);
            $query->bindParam(":premio3", $premio3);
            $query->bindParam(":otroPremio", $otroPremio);
            //Ejecutar statement con execute(). Valoraremos mediante un ternario lo que regresará el método insert
            return ($query->execute())?true : false ;
        }

        //Método para eliminar torneo
        public function delete($id){
            $statement = "DELETE FROM torneos WHERE idTorneo = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);
            return ($query->execute())? true : false;
        }

    }

?>