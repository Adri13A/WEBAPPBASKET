<?php

require_once("../../models/equipos.php");

class equiposController{
    private $model;

    function __construct(){
        $this->model = new equipos();
    }

    //Creamos método controlador que manda a llamar la función insert del modelo
    //Si los datos se guardan, redireccionará al usuario a la pantalla de inicio
    //Si no, se mantendrá en la pantalla de formulario
    public function saveEquipo($nombreEquipo, $logoEquipo, $nombreResponsable, $correoResponsable,
    $celularResponsable, $idGrupo, $idTorneo){
        //Función insert, regresa un ID
        $id = $this->model->insert($nombreEquipo, $logoEquipo, $nombreResponsable, $correoResponsable,
        $celularResponsable, $idGrupo, $idTorneo);
        return ($id!=false) ? header("Location: grupo.php?id=$idGrupo") : header("Location: frmEquipos.php");
    }

    //Manda a llamar el método read() del modelo
    public function readEquipos($idTorneo){
        return ($this->model->read($idTorneo))? $this->model->read($idTorneo) : false;
    }

    public function readEquiposGrupo($idGrupo){
        return ($this->model->readEquiposGrupo($idGrupo))? $this->model->readEquiposGrupo($idGrupo) : false;
    }

    //Ejecuta readOne()
    public function readOneEquipo($id){
        return ($this->model->readOne($id))? $this->model->readOne($id) : header("Location: organizador.php");
    }
    
    //Actualiza un Equipo
    public function updateEquipo($id,$nombreEquipo, $logoEquipo, $nombreResponsable, $correoResponsable,
    $celularResponsable, $idGrupo){
        return ($this->model->update($id,$nombreEquipo, $logoEquipo, $nombreResponsable, $correoResponsable,
        $celularResponsable, $idGrupo)) ? header("Location: readOneEquipo.php?id=".$id) : 
        header("Location: readAllEquipos.php?id=$idGrupo");

    }

    //Elimina un jugador con delete()
    public function deleteEquipo($id, $idGrupo){
        return ($this->model->delete($id))? header("Location: readAllEquipos.php?id=$idGrupo") : header("Location: readOneEquipo.php?id=$id");
    }
}

?>