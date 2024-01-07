
<?php
    //Organizador    
    require_once("../../config/conexion.php");
    class calendarioJuegos{
        private $PDO;

        public function __construct(){
            $con = new Conexion();
            $this->PDO = $con->open();
        }

        public function __destruct(){
        
            $this->PDO = NULL;
            
        }

        public function insert($equipoLocal, $equipoVisitante, $fecha, $hora, $sede, $categoria,
        $tipoDeJuego){
            $statement = "INSERT INTO calendariojuegos VALUES(NULL, :equipoLocal, :equipoVisitante, :fecha,
            :hora, :sede, :categoria, :tipoDeJuego)";
            $query = $this->PDO->prepare($statement);

            $query->bindParam(":equipoLocal", $equipoLocal);
            $query->bindParam(":equipoVisitante", $equipoVisitante);
            $query->bindParam(":fecha", $fecha);
            $query->bindParam(":hora", $hora);
            $query->bindParam(":sede", $sede);
            $query->bindParam(":categoria", $categoria);
            $query->bindParam(":tipoDeJuego", $tipoDeJuego);

            return ($query->execute())?true : false ;

        }

        public function update($id,$equipoLocal, $equipoVisitante, $fecha, $hora, $sede, $categoria,
        $tipoDeJuego){
            $statement = "UPDATE calendariojuegos
            SET equipoLocal = :equipoLocal, equipoVisitante= :equipoVisitante, fecha= :fecha, 
            hora= :hora, sede= :sede, categoria= :categoria,  tipoDeJuego= :tipoDeJuego
            WHERE idCalendarioJuegos= :id";

            $query = $this->PDO->prepare($statement);

            $query->bindParam(":equipoLocal", $equipoLocal);
            $query->bindParam(":equipoVisitante", $equipoVisitante);
            $query->bindParam(":fecha", $fecha);
            $query->bindParam(":hora", $hora);
            $query->bindParam(":sede", $sede);
            $query->bindParam(":categoria", $categoria);
            $query->bindParam(":tipoDeJuego", $tipoDeJuego);
            $query->bindParam(":id", $id);

            return ($query->execute())?true : false ;
        }

        public function delete($id){
            $statement = "DELETE FROM calendariojuegos WHERE idCalendarioJuegos = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);

            return ($query->execute())? true : false;
        }

        public function read($idTorneo){
            $statement = "SELECT * FROM calendariojuegos WHERE idTorneo = :idTorneo";

            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())? $query->fetchAll() : false;
        }

        public function readOne($id){
            $statement = "SELECT * FROM calendariojuegos WHERE idCalendarioJuegos = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);
            return ($query->execute())? $query->fetch() : false;
        }

        public function insertJuegosJugados($idEquipo1, $idEquipo2, $idTorneo){
            $statement = "INSERT INTO juegosjugados VALUES(NULL, :id1, :id2, 1, :idTorneo)";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id1",$idEquipo1);
            $query->bindParam(":id2",$idEquipo2);
        }

        public function updateCantidad($id){
            $statement = "UPDATE juegosjugados SET cantidadJuegos = cantidadJuegos+1 WHERE
            idJuegosJugados = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);
            return ($query->execute())? $query->fetch() : false;
        }

        public function readJuegosJugados($idTorneo){
            $statement= "SELECT * FROM juegosjugados WHERE idTorneo=:id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $idTorneo);

            return ($query->execute())? $query->fetchAll() : false;

        }

        public function deleteJuegosJugados($id){
            $statement = "DELETE FROM juegosjugados WHERE idJuegosJugado = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $idTorneo);
            return ($query->execute())? true : false;
        }

    }

?>