<?php

require_once("../../models/calendarioJuegos.php");

class calendarioJuegosController{
    private $model;

    function __construct(){
        $this->model = new calendarioJuegos();
    }

    //Creamos método controlador que manda a llamar la función insert del modelo
    //Si los datos se guardan, redireccionará al usuario a la pantalla de inicio
    //Si no, se mantendrá en la pantalla de formulario
    public function saveCalendario($equipoLocal, $equipoVisitante, $fecha, $hora, $sede, $categoria,
    $tipoDeJuego){
        //Función insert, regresa un ID
        $id = $this->model->insert($equipoLocal, $equipoVisitante, $fecha, $hora, $sede, $categoria,
        $tipoDeJuego);
        return ($id!=false) ? header("Location: organizador.php") : header("Location: frmEquipo.php");
    }

    //Manda a llamar el método read() del modelo
    public function readCalendario($idTorneo){
        return ($this->model->read($idTorneo))? $this->model->read($idTorneo) : false;
    }
    //Ejecuta readOne()
    public function readOneCalendario($id){
        return ($this->model->readOne($id))? $this->model->readOne($id) : header("Location: organizador.php");
    }
    
    //Actualiza una Jornada
    public function updateCalendario($id,$equipoLocal, $equipoVisitante, $fecha, $hora, $sede, $categoria,
    $tipoDeJuego){
        return ($this->model->update($id,$equipoLocal, $equipoVisitante, $fecha, $hora, $sede, $categoria,
        $tipoDeJuego)) ? header("Location: readOneCalendarioJuegos.php?id=".$id) : 
        header("Location: readAllCalendarioJuegos.php");

    }

    //Elimina un jugador con delete()
    public function deleteCalendario($id){
        return ($this->model->delete($id))? header("Location: readAllCalendarioJuegos.php") : header("Location: readOneEquipo.php?id=$id");
    }

    public function saveJuegosJugados($idEquipo1, $idEquipo2, $idTorneo){
        $id = $this->model->insertJuegosJugados($idEquipo1, $idEquipo2, $idTorneo);
        return ($id!=false) ? header("Location: organizador.php") : header("Location: frmEquipo.php");
    }

    public function addCantidad($id){
        return ($this->model->updateCantidad($id)) ? true : false;
    }

    public function deleteJuegos($id){
        return ($this->model->deleteJuegosJugados($id))? header("Location: readAllCalendarioJuegos.php") : header("Location: readOneEquipo.php?id=$id");
    }

    public function readJuegos($idTorneo){
        return ($this->model->readJuegosJugados($idTorneo))? $this->model->read($idTorneo) : false;
    }

}

?>