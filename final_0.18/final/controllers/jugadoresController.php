<?php

    require_once("../../models/jugadores.php");

    class jugadoresController{
        private $model;

        function __construct(){
            $this->model = new jugadores();
        }

        //Creamos método controlador que manda a llamar la función insert del modelo
        //Si los datos se guardan, redireccionará al usuario a la pantalla de inicio
        //Si no, se mantendrá en la pantalla de formulario
        public function saveJugadorEquipo($nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
        $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador, $idTorneo, $idEquipo){
            //Función insert, regresa un ID
            $id = $this->model->insert($nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
            $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador, $idTorneo);
            return ($id!=false) ? header("Location: equipo.php?id=$idEquipo") : header("Location: frmJugadorEquipo.php");
        }

        public function saveJugador($nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
        $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador, $idTorneo){
            //Función insert, regresa un ID
            $id = $this->model->insert($nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
            $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador, $idTorneo);
            return ($id!=false) ? header("Location: jugadores.php") : header("Location: frmJugador.php");
        }

        //Manda a llamar el método read() del modelo
        public function readJugadores($idTorneo){
            return ($this->model->read($idTorneo))? $this->model->read($idTorneo) : false;
        }

        //Manda a llamar el método read() del modelo
        public function readJugadoresEquipo($nombreEquipo){
            return ($this->model->readJugadorEquipo($nombreEquipo))? $this->model->readJugadorEquipo($nombreEquipo) : false;
        }

        //Ejecuta readOne()
        public function readOneJugador($id){
            return ($this->model->readOne($id))? $this->model->readOne($id) : header("Location: organizador.php");
        }
        
        //Actualiza un jugador
        public function updateJugador($idJugador, $nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
        $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador){
            return ($this->model->update($idJugador, $nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
            $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador)) ? header("Location: readOneJugador.php?id=".$idJugador) : 
            header("Location: readAllJugadores.php");
        }

        //Actualiza un jugador de un equipo
        public function updateJugadorEquipo($idJugador, $nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
        $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador){
            return ($this->model->update($idJugador, $nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador,
            $celularJugador, $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador)) ? header("Location: readOneJugadorEquipo.php?id=".$idJugador) : 
            header("Location: updateJugadorEquipo.php?id=$idJugador");
        }

        //Elimina un jugador con delete()
        public function deleteJugador($id){
            return ($this->model->delete($id))? header("Location: readAllJugadores.php") : header("Location: readOneJugador.php?id=$id");
        }

        //Elimina un jugador con delete()
        public function deleteJugadorEquipo($id, $idEquipo){
            return ($this->model->delete($id))? header("Location: readAllJugadoresEquipo.php?id=$idEquipo") : header("Location: readOneJugador.php?id=$id");
        }       
    }

?>