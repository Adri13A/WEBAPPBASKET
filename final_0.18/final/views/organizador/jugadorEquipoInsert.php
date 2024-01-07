<?php
    session_start();
    require_once("../../controllers/jugadoresController.php");
    //Atrapar los valores introducidos en el formulario
    $nombreEquipo = $_POST['txtNombreEquipo'];
    $nombreJugador = $_POST['txtNombreJugador'];
    $apellidosJugador = $_POST['txtApellidosJugador'];
    $fechaNacJugador = $_POST['txtFechaNacJugador'];
    $apellidosJugador = $_POST['txtApellidosJugador'];
    $correoJugador = $_POST['txtCorreoJugador'];
    $celularJugador = $_POST['txtCelularJugador'];
    $tipoSangreJugador = $_POST['txtTipoSangreJugador'];
    $contactoEmergenciaJugador = $_POST['txtContactoEmergenciaJugador'];
    $idTorneo = $_SESSION['idTorneo'];
    $idEquipo = $_POST['txtIdEquipo'];


    $file = $_FILES['txtFotoJugador'];
    $fotoNombre = $nombreJugador . ' ' . $apellidosJugador . '.jpg';
    $ruta_provisional = $file['tmp_name'];
    $carpeta = "../img/fotosJugadores/";
    $src = $carpeta.$fotoNombre;
    move_uploaded_file($ruta_provisional, $src);
    $fotoJugador="../img/fotosJugadores/".$fotoNombre;

    //instanciar la clase controller
    $objControl = new jugadoresController();
    $objControl->saveJugadorEquipo($nombreEquipo, $nombreJugador, $apellidosJugador, $fechaNacJugador, $correoJugador, $celularJugador, 
    $tipoSangreJugador, $contactoEmergenciaJugador, $fotoJugador, $idTorneo, $idEquipo);
?>