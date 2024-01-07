<?php
    session_start();
    require_once("../../controllers/equiposController.php");
    //Atrapar los valores introducidos en el formulario
    $idEquipo = $_POST['txtId'];
    $nombreEquipo = $_POST['txtNombreEquipo'];
    $nombreResponsable = $_POST['txtNombreResponsable'];
    $correoResponsable = $_POST['txtCorreoResponsable'];
    $celularResponsable = $_POST['txtCelularResponsable'];
    $idGrupo = $_SESSION['idGrupo'];
   
    if($_FILES['txtLogoEquipo']!=''){
    $file = $_FILES['txtLogoEquipo'];
    $logoNombre = $nombreEquipo . '.jpg';
    $ruta_provisional = $file['tmp_name'];
    $carpeta = "../img/logosEquipos/";
    $src = $carpeta.$logoNombre;
    move_uploaded_file($ruta_provisional, $src);
    $logoEquipo="../img/logosEquipos/".$logoNombre;
    } else {
        $logoEquipo = $_POST['txtLogoEquipoViejo'];
    }

    //instanciar la clase controller
    $objControl = new equiposController();
    $objControl->updateEquipo($idEquipo, $nombreEquipo, $logoEquipo, $nombreResponsable, $correoResponsable, $celularResponsable, $idGrupo);
?>