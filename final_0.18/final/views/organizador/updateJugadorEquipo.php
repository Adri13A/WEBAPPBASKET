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
           <b class="fs-4"> <span> <i class="fa-solid fa-people-group"></i></span> Editar la información del jugador</b>
        </div>
        <div class="card-body">
            <form action="jugadorEquipoUpdate.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="idJugador" class="form-label">Id del jugador</label>
                        <input type="text" class="form-control" name="txtId" id="idJugador" 
                        value="<?= $lstJugador['idJugador'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="nombreEquipo" class="form-label">Nombre del Equipo del jugador</label>
                    <input type="text" class="form-control" name="txtNombreEquipo" id="nombreEquipo"  value="<?= $lstJugador['nombreEquipo'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nombreJugador" class="form-label">Nombre del jugador</label>
                    <input type="text" class="form-control" name="txtNombreJugador" id="nombreJugador"  value="<?= $lstJugador['nombreJugador'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="apellidosJugador" class="form-label">Apellidos del jugador</label>
                    <input type="text" class="form-control" name="txtApellidosJugador" id="apellidosJugador" value="<?= $lstJugador['apellidosJugador'] ?>" required>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="fechaNacJugador" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="txtFechaNacJugador" id="fechaNacJugador" value="<?= $lstJugador['fechaNacJugador'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="correoJugador" class="form-label">Correo del Jugador</label>
                            <input type="email" class="form-control" name="txtCorreoJugador" id="correoJugador" value="<?= $lstJugador['correoJugador'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="celularJugador" class="form-label">Celular del Jugador</label>
                        <input type="text" class="form-control" id="celularJugador" name="txtCelularJugador" value="<?= $lstJugador['celularJugador'] ?>" required>
                    </div>
                </div>
                <?php
                $tipoSangreJugador = array("A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-");
                ?>
                <div class="row">
                    <div class="col mb-3">
                        <label for="tipoSangreJugador" class="form-label">Tipo de sangre del Jugador</label>
                        <select class="form-select" name="txtTipoSangreJugador" id="tipoSangreJugador" required>
                        <?php
                            foreach($tipoSangreJugador as $tipoSangre){
                                if($tipoSangre == $lstJugador['tipoSangreJugador'])
                                    echo "<option value='$tipoSangre' selected>$tipoSangre</option>";
                                else
                                    echo "<option value='$tipoSangre'>$tipoSangre</option>";
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="contactoEmergenciaJugador" class="form-label">Contacto de Emergencia del Jugador</label>
                        <input type="text" class="form-control" id="contactoEmergenciaJugador" name="txtContactoEmergenciaJugador" value="<?= $lstJugador['contactoEmergenciaJugador'] ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="fotoEquipo" class="form-label">Foto del Jugador</label>
                        <th><img src="<?= $lstJugador['fotoJugador'] ?>" alt="Foto del jugador" width="100" height="100" name="txtFotoVieja"></th>
                        <input type="file" class="form-control" id="fotoJugador" name="txtFotoJugador">
                        <input type="hidden" class="form-control" name="txtFotoJugadorVieja" id="fotoJugadorVieja" 
                        value="<?= $lstJugador['fotoJugador'] ?>">
                    </div>
                </div>
                    <div class="col mb-3">
                        <button type="submit" class ="btn btn-primary">Guardar</button>
                        <a href="readAllJugadoresEquipo.php?id=<?= $_SESSION['idEquipo'] ?>" class="btn btn-danger">Cancelar</a>
                    </div>  
            </form>
        </div>
        <div class="card-footer">
            Formulario para editar jugadores
        </div>
    </div>
</div>
<?php require_once("./template/footer.php"); ?>