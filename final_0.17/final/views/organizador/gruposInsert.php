<?php
    session_start();
    require_once("../../controllers/gruposController.php");
    //Atrapar los valores introducidos en el formulario
    $nombreGrupo = $_POST['txtNombreGrupo'];
    $categoria = $_POST['txtCategoria'];
    $idTorneo = $_SESSION['idTorneo'];

    //instanciar la clase controller
    $objControl = new gruposController();
    $objControl->saveGrupo($nombreGrupo, $categoria, $idTorneo);
?>