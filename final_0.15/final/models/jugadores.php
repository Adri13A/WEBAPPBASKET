
<?php
    //Organizador    
    require_once("../../config/conexion.php");
    class jugadores{
        private $PDO;

        public function __construct(){
            $con = new Conexion();
            $this->PDO = $con->open();
        }

        public function __destruct(){
        
            $this->PDO = NULL;
            
        }

        public function insert($nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
        $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador, $idTorneo){
            $statement = "INSERT INTO jugadores VALUES(NULL, :nombreEquipo, :nombreJugador, :apellidosJugador,
            :fechaNacJugador, :correoJugador, :celularJugador, :tipoSangreJugador, :contactoEmergenciaJugador, 
            :fotoJugador, :idTorneo)";
            $query = $this->PDO->prepare($statement);

            $query->bindParam(":nombreEquipo", $nombreEquipo);
            $query->bindParam(":nombreJugador", $nombreJugador);
            $query->bindParam(":apellidosJugador", $apellidosJugador);
            $query->bindParam(":fechaNacJugador", $fechaNacJugador);
            $query->bindParam(":correoJugador", $correoJugador);
            $query->bindParam(":celularJugador", $celularJugador);
            $query->bindParam(":tipoSangreJugador", $tipoSangreJugador);
            $query->bindParam(":contactoEmergenciaJugador", $contactoEmergenciaJugador);
            $query->bindParam(":fotoJugador", $fotoJugador);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())?true : false ;

        }

        public function update($idJugador, $nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
        $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador){
            $statement = "UPDATE jugadores
            SET nombreEquipo = :nombreEquipo, nombreJugador= :nombreJugador, apellidosJugador= :apellidosJugador, 
            fechaNacJugador= :fechaNacJugador, correoJugador= :correoJugador, celularJugador= :celularJugador,
            tipoSangreJugador= :tipoSangreJugador, contactoEmergenciaJugador= :contactoEmergenciaJugador,
            fotoJugador= :fotoJugador
            WHERE idJugador= :idJugador";

            $query = $this->PDO->prepare($statement);

            $query->bindParam(":nombreEquipo", $nombreEquipo);
            $query->bindParam(":nombreJugador", $nombreJugador);
            $query->bindParam(":apellidosJugador", $apellidosJugador);
            $query->bindParam(":fechaNacJugador", $fechaNacJugador);
            $query->bindParam(":correoJugador", $correoJugador);
            $query->bindParam(":celularJugador", $celularJugador);
            $query->bindParam(":tipoSangreJugador", $tipoSangreJugador);
            $query->bindParam(":contactoEmergenciaJugador", $contactoEmergenciaJugador);
            $query->bindParam(":fotoJugador", $fotoJugador);
            $query->bindParam(":idJugador", $idJugador);

            return ($query->execute())?true : false ;
        }

        public function delete($idJugador){
            $statement = "DELETE FROM jugadores WHERE idJugador = :idjugador";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idEquipo", $idJugador);

            return ($query->execute())? true : false;
        }

        public function read($idTorneo){
            $statement = "SELECT * FROM jugadores where idTorneo = :idTorneo";

            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())? $query->fetchAll() : false;
        }

        public function readOne($idJugador){
            $statement = "SELECT * FROM jugadores WHERE idJugador = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);
            return ($query->execute())? $query->fetch() : false;
        }

    }

?>