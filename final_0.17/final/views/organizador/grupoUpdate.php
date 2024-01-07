<?php

    require_once("../../controllers/gruposController.php");
    //Atrapar los valores a actualizar introducidos en el formulario
    $id = $_POST['txtId'];
    $nombreGrupo = $_POST['txtNombreGrupo'];
    $categoria = $_POST['txtCategoria'];

    //instanciar la clase controller
    $objControl = new gruposController();
    $objControl->updateGrupo($id, $nombreGrupo, $categoria);
?>