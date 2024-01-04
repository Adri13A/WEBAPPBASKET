<?php

    require_once("../../controllers/torneosController.php");
    //Atrapar los valores a actualizar introducidos en el formulario
    $id = $_POST['txtId'];
    $nombreTorneo = $_POST['txtNombreTorneo'];
    $patrocinadores = $_POST['txtPatrocinadores'];
    $organizador = $_POST['txtOrganizador'];
    $sede = $_POST['txtSede'];
    
    //$categoria = $_POST['txtCategoria'];
    $premio1 = $_POST['txtPremio1'];
    $premio2 = $_POST['txtPremio2'];
    $premio3 = $_POST['txtPremio3'];
    $otroPremio = $_POST['txtOtroPremio'];

    //instanciar la clase controller
    $objControl = new torneosController();
    $objControl->updateTorneo($id,$nombreTorneo, $organizador, $patrocinadores, $sede, $premio1, $premio2,
    $premio3, $otroPremio);
?>