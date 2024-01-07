<?php
    require_once("./template/header.php");
    require_once("../../controllers/jugadoresController.php");
    //Instanciamos controlador para ejecutar consulta
    $objControl = new jugadoresController();
    //Capturar el id del torneo
    $lstJugador = $objControl->readOneJugador($_GET['id']); 
?>

<div class="mx-auto p-5">
    <div class="card">
        <div class="card-header text-center">
           <b class="fs-4"> <span> <i class="fa-solid fa-people-group"></i></span> Mostrar la información del jugador</b>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombreJugador" class="form-label">Nombre del jugador</label>
                    <input type="text" class="form-control" name="txtNombreJugador" id="nombreJugador"  value="<?= $lstJugador['nombreJugador'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="apellidosJugador" class="form-label">Apellidos del jugador</label>
                    <input type="text" class="form-control" name="txtApellidosJugador" id="apellidosJugador" value="<?= $lstJugador['apellidosJugador'] ?>" readonly>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="fechaNacJugador" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="txtFechaNacJugador" id="fechaNacJugador" value="<?= $lstJugador['fechaNacJugador'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="correoJugador" class="form-label">Correo del Jugador</label>
                            <input type="email" class="form-control" name="txtCorreoJugador" id="correoJugador" value="<?= $lstJugador['correoJugador'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="celularJugador" class="form-label">Celular del Jugador</label>
                        <input type="text" class="form-control" id="celularJugador" name="txtCelularJugador" value="<?= $lstJugador['celularJugador'] ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="tipoSangreJugador" class="form-label">Tipo de sangre del Jugador</label>
                        <input type="text" class="form-control" id="tipoSangreJugador" name="txtTipoSangreJugador" value="<?= $lstJugador['tipoSangreJugador'] ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="contactoEmergenciaJugador" class="form-label">Contacto de Emergencia del Jugador</label>
                        <input type="text" class="form-control" id="contactoEmergenciaJugador" name="txtContactoEmergenciaJugador" value="<?= $lstJugador['contactoEmergenciaJugador'] ?>" eadonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="fotoJugador" class="form-label">Foto del jugador</label>
                        <th><img src="<?= $lstJugador['fotoJugador'] ?>" alt="Foto del jugador" width="100" height="100"></th>

                    </div>
                </div>
                        <div class="colo-12">
                        <a href="readAllJugadoresEquipo.php?id=<?= $_SESSION['idEquipo'];?>" class="btn btn-success">Regresar</a>
                    </div>
            </form>
        </div>
        <div class="card-footer">
            Formulario para registrar jugadores
        </div>
    </div>
</div>
<?php require_once("./template/footer.php"); ?>