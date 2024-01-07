<?php
    require_once("./template/header.php");
    require_once("../../controllers/equiposController.php");
    //Instanciamos controlador para ejecutar consulta
    $objControl = new equiposController();
    //Capturar el id del torneo
    $rows = $objControl->readEquipos($_SESSION['idTorneo']);
?>

<div class="mx-auto p-5">
    <div class="card">
        <div class="card-header text-center">
           <b class="fs-4"> <span> <i class="fa-solid fa-people-group"></i></span> Capturar la información del jugador</b>
        </div>
        <div class="card-body">
            <form action="jugadorInsert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombreEquipo" class="form-label">Nombre del equipo</label>
                    <select class="form-select" name="txtNombreEquipo" id="nombreEquipo">
                    <?php if ($rows){
                         foreach ($rows as $row) : 
                        $nombreEquipo = $row['nombreEquipo'];
                            echo "<option value='$nombreEquipo'> $nombreEquipo</option>";           
                        endforeach; 
                        }   else{
                            echo "<option value='sinEquipo'> sinEquipo</option>";           
                        }?> 
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nombreJugador" class="form-label">Nombre del jugador</label>
                    <input type="text" class="form-control" name="txtNombreJugador" id="nombreJugador" required>
                </div>
                <div class="mb-3">
                    <label for="apellidosJugador" class="form-label">Apellidos del jugador</label>
                    <input type="text" class="form-control" name="txtApellidosJugador" id="apellidosJugador" required>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="fechaNacJugador" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="txtFechaNacJugador" id="fechaNacJugador" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="correoJugador" class="form-label">Correo del Jugador</label>
                            <input type="email" class="form-control" name="txtCorreoJugador" id="correoJugador" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="celularJugador" class="form-label">Celular del Jugador</label>
                        <input type="text" class="form-control" id="celularJugador" name="txtCelularJugador" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="tipoSangreJugador" class="form-label">Tipo de sangre del jugador</label>
                        <select class="form-select" name="txtTipoSangreJugador" id="tipoSangreJugador">
                        <option value="A+" selected>A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        </select>
                    </div>
                </div>  
                <div class="row">
                    <div class="col mb-3">
                        <label for="contactoEmergenciaJugador" class="form-label">Contacto de Emergencia del Jugador</label>
                        <input type="text" class="form-control" id="contactoEmergenciaJugador" name="txtContactoEmergenciaJugador" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="fotoJugador" class="form-label">Foto del jugador</label>
                        <input type="file" class="form-control" id="fotoJugador" name="txtFotoJugador" required>
                    </div>
                </div>
                <div class="col mb-3">
                    <button type="submit" class ="btn btn-primary">Guardar</button>
                    <a href="jugadores.php" class="btn btn-danger">Cancelar</a>
                </div> 
            </form>
        </div>
        <div class="card-footer">
            Formulario para registrar jugadores
        </div>
    </div>
</div>
<?php require_once("./template/footer.php"); ?>