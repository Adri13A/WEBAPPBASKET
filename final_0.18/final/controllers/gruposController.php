<?php

require_once("../../models/grupos.php");

class gruposController{
    private $model;

    function __construct(){
        $this->model = new grupos();
    }

    //Creamos método controlador que manda a llamar la función insert del modelo
    //Si los datos se guardan, redireccionará al usuario a la pantalla de inicio
    //Si no, se mantendrá en la pantalla de formulario
    public function saveGrupo($nombreGrupo, $categoria, $idTorneo){
        //Función insert, regresa un ID
        $id = $this->model->insert($nombreGrupo, $categoria, $idTorneo);
        return ($id!=false) ? header("Location: organizador.php") : header("Location: frmGrupos.php");
    }

    //Manda a llamar el método read() del modelo
    public function readGrupos($idTorneo){
        return ($this->model->read($idTorneo))? $this->model->read($idTorneo) : false;
    }
    //Ejecuta readOne()
    public function readOneGrupo($id){
        return ($this->model->readOne($id))? $this->model->readOne($id) : header("Location: organizador.php");
    }
    
    //Actualiza un Grupo
    public function updateGrupo($idGrupo, $nombreGrupo, $categoria){
        return ($this->model->update($idGrupo, $nombreGrupo, $categoria)) ? header("Location: readOneGrupo.php?id=".$idGrupo) : 
        header("Location: readAllGrupos.php");

    }

    //Elimina un jugador con delete()
    public function deleteGrupo($id){
        return ($this->model->delete($id))? header("Location: readAllGrupos.php") : header("Location: readOneGrupo.php?id=$id");
    }
}

?>