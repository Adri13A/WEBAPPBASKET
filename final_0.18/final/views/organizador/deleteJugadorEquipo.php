<?php
    session_start();
    require_once("../../controllers/jugadoresController.php");
    $objControl = new jugadoresController();
    //Obtener id desde el botón

    $objControl->deleteJugadorEquipo($_GET['id'], $_SESSION['idEquipo']);

?>  