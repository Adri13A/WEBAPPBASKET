<?php
    //Organizador
    require_once("../../config/conexion.php");
    class grupos{
        private $PDO;
        private $table = "grupos";

        public function __construct(){
            $con = new Conexion();
            $this->PDO = $con->open();
        }

        public function __destruct(){
        
            $this->PDO = NULL;
            
        }

        public function insert($nombreGrupo, $categoria, $idTorneo){
            $statement = "INSERT INTO grupos VALUES(NULL, :nombreGrupo, :categoria, :idTorneo)";
            $query = $this->PDO->prepare($statement);

            $query->bindParam(":nombreGrupo", $nombreGrupo);
            $query->bindParam(":categoria", $categoria);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())?true : false ;

        }

        public function update($idGrupo, $nombreGrupo, $categoria){
            $statement = "UPDATE grupos
            SET nombreGrupo = :nombreGrupo, categoria= :categoria
            WHERE idGrupo= :idGrupo";
            $query = $this->PDO->prepare($statement);

            $query->bindParam(":nombreGrupo", $nombreGrupo);
            $query->bindParam(":categoria", $categoria);
            $query->bindParam(":idGrupo", $idGrupo);

            return ($query->execute())?true : false ;
        }

        public function delete($idGrupo){
            $statement = "DELETE FROM grupos WHERE idGrupo = :idGrupo";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idGrupo", $idGrupo);

            return ($query->execute())? true : false;
        }

        public function read($idTorneo){
            $statement = "SELECT * FROM grupos where idTorneo = :idTorneo";

            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())? $query->fetchAll() : false;
        }

        public function readOne($id){
            $statement = "SELECT * FROM grupos WHERE idGrupos = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);
            return ($query->execute())? $query->fetch() : false;
        }

    }

?>