<?php

    require_once("../../controllers/torneosController.php");
    $objControl = new torneosController();
    //Obtener id desde el botón
    $objControl->deleteTorneo($_GET['id']);

?>