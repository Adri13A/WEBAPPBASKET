<?php
    session_start();
    require_once("../../controllers/equiposController.php");
    $objControl = new equiposController();
    //Obtener id desde el botón

    $objControl->deleteEquipo($_GET['id'], $_SESSION['idGrupo']);

?>