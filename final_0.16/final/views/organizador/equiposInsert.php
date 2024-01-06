<?php
    session_start();
    require_once("../../controllers/equiposController.php");
    //Atrapar los valores introducidos en el formulario
    $nombreEquipo = $_POST['txtNombreEquipo'];
    //$logoEquipo = $_POST['txtLogoEquipo'];
    $nombreResponsable = $_POST['txtNombreResponsable'];
    $correoResponsable = $_POST['txtCorreoResponsable'];
    $celularResponsable = $_POST['txtCelularResponsable'];
    $idGrupo = $_POST['txtIdGrupo'];
    $idTorneo = $_SESSION['idTorneo'];

    $file = $_FILES['txtLogoEquipo'];
    $logoNombre = $nombreEquipo . '.png';
    $ruta_provisional = $file['tmp_name'];
    $carpeta = "../img/logosEquipos/";
    $src = $carpeta.$logoNombre;
    move_uploaded_file($ruta_provisional, $src);
    $logoEquipo="../img/logosEquipos/".$logoNombre;

    //instanciar la clase controller
    $objControl = new equiposController();
    $objControl->saveEquipo($nombreEquipo, $logoEquipo, $nombreResponsable, $correoResponsable, $celularResponsable, $idGrupo, $idTorneo);
?>