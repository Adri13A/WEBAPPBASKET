<?php
    session_destroy();
    session_start();
    require_once("../../controllers/usuariosController.php");
    //Atrapar los valores introducidos en el formulario
    $usuario = $_POST['txtUsuario'];
    $pass = $_POST['txtPassword'];

    //instanciar la clase controller
    $objControl = new usuariosController();
    $objControl->authenticateUser($usuario, $pass);
?>