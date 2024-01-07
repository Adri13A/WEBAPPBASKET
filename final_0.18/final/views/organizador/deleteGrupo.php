<?php
    require_once("../../controllers/gruposController.php");
    $objControl = new gruposController();
    //Obtener id desde el botón
    $objControl->deleteGrupo($_GET['id']);

?>