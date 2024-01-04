<?php

    require_once("../../models/torneos.php");

    class torneosController{
        private $model;

        function __construct(){
            $this->model = new torneos();
        }

        //Creamos método controlador que manda a llamar la función insert del modelo
        //Si los datos se guardan, redireccionará al usuario a la pantalla de inicio
        //Si no, se mantendrá en la pantalla de formulario
        public function saveTorneo($nombreTorneo, $organizador, $patrocinadores, $sede , $premio1, $premio2,
        $premio3, $otroPremio, $usuario, $pass){
            //Función insert, regresa un ID
            $id = $this->model->insert($nombreTorneo, $organizador, $patrocinadores, $sede, $premio1, $premio2,
            $premio3, $otroPremio, $usuario, $pass);
            return ($id!=false) ? header("Location: admin.php") : header("Location: frmTorneos.php");
        }

        //Manda a llamar el método read() del modelo
        public function readTorneo(){
            return ($this->model->read())? $this->model->read() : false;
        }
        //Ejecuta readOne()
        public function readOneTorneo($id){
            return ($this->model->readOne($id))? $this->model->readOne($id) : header("Location: admin.php");
        }
        
        //Actualiza un torneo
        public function updateTorneo($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $premio1, $premio2,
        $premio3, $otroPremio){
            return ($this->model->update($id, $nombreTorneo, $organizador, $patrocinadores, $sede, 
            $premio1, $premio2, $premio3, $otroPremio)) ? header("Location: readOneTorneo.php?id=".$id) : 
            header("Location: readAllTorneos.php");

        }

        //Elimina un torneo con delete()
        public function deleteTorneo($id){
            return ($this->model->delete($id))? header("Location: readAllTorneos.php") : header("Location: readOneTorneo.php?id=$id");
        }
    }

?>