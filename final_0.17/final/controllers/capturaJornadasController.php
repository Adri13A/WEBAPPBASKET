<?php

require_once("../../models/capturaJornadas.php");

class capturaJornadasController{
    private $model;

    function __construct(){
        $this->model = new capturaJornada();
    }

    //Creamos método controlador que manda a llamar la función insert del modelo
    //Si los datos se guardan, redireccionará al usuario a la pantalla de inicio
    //Si no, se mantendrá en la pantalla de formulario
    public function saveJornada($idEquipo, $idJugador, $tirosTresPuntos,
    $faltasCometidas, $idTorneo){
        //Función insert, regresa un ID
        $id = $this->model->insert($idEquipo, $idJugador, $tirosTresPuntos,
        $faltasCometidas, $idTorneo);
        return ($id!=false) ? header("Location: organizador.php") : header("Location: frmEquipo.php");
    }

    //Manda a llamar el método read() del modelo
    public function readJornada($idTorneo){
        return ($this->model->read($idTorneo))? $this->model->read($idTorneo) : false;
    }
    //Ejecuta readOne()
    public function readOneJornada($id){
        return ($this->model->readOne($id))? $this->model->readOne($id) : header("Location: organizador.php");
    }
    
    //Actualiza una Jornada
    public function updateJornada($id,$tirosTresPuntos, $faltasCometidas){
        return ($this->model->update($id,$tirosTresPuntos, $faltasCometidas)) ? header("Location: readOneEquipo.php?id=".$id) : 
        header("Location: readAllJornada.php");

    }

    //Elimina un jugador con delete()
    public function deleteJornada($id){
        return ($this->model->delete($id))? header("Location: readAllEquipos.php") : header("Location: readOneEquipo.php?id=$id");
    }
}

?>