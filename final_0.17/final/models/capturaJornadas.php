
<?php
    //Organizador    
    require_once("../../config/conexion.php");
    class capturaJornada{
        private $PDO;

        public function __construct(){
            $con = new Conexion();
            $this->PDO = $con->open();
        }

        public function __destruct(){
        
            $this->PDO = NULL;
            
        }

        public function insert($idEquipo, $idJugador, $tirosTresPuntos,
        $faltasCometidas, $idTorneo){
            $statement = "INSERT INTO roldejuegos VALUES(NULL, :idEquipo, :idJugador, :tirosTresPuntos,
            :faltasCometidas, :idTorneo)";
            $query = $this->PDO->prepare($statement);

            $query->bindParam(":idEquipo", $idEquipo);
            $query->bindParam(":idJugador", $idJugador);
            $query->bindParam(":tirosTresPuntos", $tirosTresPuntos);
            $query->bindParam(":faltasCometidas", $faltasCometidas);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())?true : false ;

        }

        public function update($id,$tirosTresPuntos, $faltasCometidas){
            $statement = "UPDATE roldejuegos
            SET tirosTresPuntos = :tirosTresPuntos, faltasCometidas= :faltasCometidas
            WHERE idRolDeJuego= :id";

            $query = $this->PDO->prepare($statement);

            $query->bindParam(":tirosTresPuntos", $tirosTresPuntos);
            $query->bindParam(":faltasCometidas", $faltasCometidas);
            $query->bindParam(":id", $id);

            return ($query->execute())?true : false ;
        }

        public function delete($id){
            $statement = "DELETE FROM roldejuegos WHERE idRolDeJuego = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);

            return ($query->execute())? true : false;
        }

        public function read($idTorneo){
            $statement = "SELECT * FROM roldejuegos WHERE idTorneo = :idTorneo";

            $query = $this->PDO->prepare($statement);
            $query->bindParam(":idTorneo", $idTorneo);

            return ($query->execute())? $query->fetchAll() : false;
        }

        public function readOne($id){
            $statement = "SELECT * FROM roldejuegos WHERE idRolDeJuego = :id";
            $query = $this->PDO->prepare($statement);
            $query->bindParam(":id", $id);
            return ($query->execute())? $query->fetch() : false;
        }

        
    }

?>