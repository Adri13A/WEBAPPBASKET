
<?php
    //Organizador    
    require_once("../../config/conexion.php");
    class equipos{
        private $PDO;

        public function __construct(){
            $con = new Conexion();
            $this->PDO = $con->open();
        }

        public function __destruct(){
        
            $this->PDO = NULL;
            
        }

        public function insert($nombreEquipo, $logoEquipo, $nombreResponsable, $correoResponsable,
        $celularResponsable, $idGrupo, $idTorneo){
            $statement = "INSERT INTO equipos VALUES(NULL, :nombreEquipo, :logoEquipo, :nombreResponsable,
            :correoResponsable, :celularResponsable, :idGrupo, :idTorneo)";
            $query = $this->PDO->prepare($statement);

            $query->bindParam(":nombreEquipo", $nombreEquipo);
            $query->bindParam(":logoEquipo", $logoEquipo);
            $query->bindParam(":nombreResponsable", $nombreResponsable);
            $query->bindParam(":correoResponsable", $correoResponsable);
            $query->bindParam(":celularResponsable", $celularResponsable);
            $query->bindParam(":idGrupo", $idGrupo);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())?true : false ;

        }

        public function update($id,$nombreEquipo, $logoEquipo, $nombreResponsable, $correoResponsable,
        $celularResponsable, $idGrupo){
            $statement = "UPDATE equipos
            SET nombreEquipo = :nombreEquipo, logoEquipo= :logoEquipo, nombreResponsable= :nombreResponsable, 
            correoResponsable= :correoResponsable, celularResponsable= :celularResponsable, idGrupo= :idGrupo
            WHERE idEquipo= :id";

            $query = $this->PDO->prepare($statement);

            $query->bindParam(":nombreEquipo", $nombreEquipo);
            $query->bindParam(":logoEquipo", $logoEquipo);
            $query->bindParam(":nombreResponsable", $nombreResponsable);
            $query->bindParam(":correoResponsable", $correoResponsable);
            $query->bindParam(":celularResponsable", $celularResponsable);
            $query->bindParam(":idGrupo", $idGrupo);
            $query->bindParam(":id", $id);

            return ($query->execute())?true : false ;
        }

        public function delete($idEquipo){
            $consultaLogo = "SELECT logoEquipo from equipos where idEquipo=:id";
            $consulta = $this->PDO->prepare($consultaLogo);
            $consulta->bindParam(":id", $idEquipo);
            $consulta->execute();
            while($eliminaLogo = $consulta->fetch()){
                    $logoEquipo= $eliminaLogo['logoEquipo'];
                    unlink($logoEquipo);
                    $logoEquipo="";
            }

            $statement = "DELETE FROM equipos WHERE idEquipo = :idEquipo";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idEquipo", $idEquipo);

            return ($query->execute())? true : false;
        }

        public function read($idTorneo){
            $statement = "SELECT idEquipo, nombreEquipo, logoEquipo, nombreResponsable, correoResponsable, 
            celularResponsable, equipos.idGrupo FROM equipos 
            JOIN grupos ON equipos.idGrupo = grupos.idGrupo
            where grupos.idTorneo = :idTorneo";

            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())? $query->fetchAll() : false;
        }

        public function readEquiposGrupo($idGrupo){
            $statement = "SELECT idEquipo, nombreEquipo, logoEquipo, nombreResponsable, correoResponsable, 
            celularResponsable, equipos.idGrupo FROM equipos 
            JOIN grupos ON equipos.idGrupo = grupos.idGrupo
            where grupos.idGrupo = :idGrupo";

            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idGrupo", $idGrupo);

            return ($query->execute())? $query->fetchAll() : false;
        }

        public function readOne($id){
            $statement = "SELECT * FROM equipos WHERE idEquipo = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);
            return ($query->execute())? $query->fetch() : false;
        }

    }

?>