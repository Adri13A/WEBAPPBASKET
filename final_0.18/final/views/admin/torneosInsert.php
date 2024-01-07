<?php

    require_once("../../controllers/torneosController.php");
    //Atrapar los valores introducidos en el formulario
    $nombreTorneo = $_POST['txtNombreTorneo'];
    $patrocinadores = $_POST['txtPatrocinadores'];
    $logoPatrocinador = $_POST['txtImg']; //FALTA AGREGAR LAS IMAGENES PARA QUE SE AGUARDES EN LA BASE DE DATOS O EN PATH
    $organizador = $_POST['txtOrganizador'];
    $sede = $_POST['txtSede'];
    //$categoria = $_POST['txtCategoria'];
    $premio1 = $_POST['txtPremio1'];
    $premio2 = $_POST['txtPremio2'];
    $premio3 = $_POST['txtPremio3'];
    $otroPremio = $_POST['txtOtroPremio'];
    $usuario = $_POST['txtUsuario'];
    $pass = $_POST['txtPass'];

    //instanciar la clase controller
    $objControl = new torneosController();
    $objControl->saveTorneo($nombreTorneo, $organizador, $patrocinadores, $sede , $premio1, $premio2,
    $premio3, $otroPremio, $usuario, $pass);
?>