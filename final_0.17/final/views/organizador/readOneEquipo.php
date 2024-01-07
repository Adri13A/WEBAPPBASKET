<?php
    require_once("./template/header.php");
    require_once("../../controllers/equiposController.php");
    //Instanciamos controlador para ejecutar consulta
    $objControl = new equiposController();
    //Capturar el id del torneo
    $lstEquipo = $objControl->readOneEquipo($_GET['id']);
    
?>
    <div class="mx-auto p-5">
        <div class="card">
            <div class="card-header">
                Información del Equipo
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nombreEquipo" class="form-label">Nombre del Equipo (ID: <?= $lstEquipo['idEquipo'] ?>)</label>
                        <input type="text" class="form-control" name="txtNombreEquipo" id="nombreEquipo" 
                        value="<?= $lstEquipo['nombreEquipo'] ?>" readonly>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <div class="mb-3">
                                <label for="logoEquipo" class="form-label">Logo del Equipo</label>
                                <th><img src="<?= $lstEquipo['logoEquipo'] ?>" alt="Logo del equipo" width="100" height="100"></th>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nombreResponsable" class="form-label">Nombre del Responsable</label>
                        <input type="text" class="form-control" name="txtNombreResponsable" id="nombreResponsable" 
                        value="<?= $lstEquipo['nombreResponsable'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="correoResponsable" class="form-label">Correo del Responsable</label>
                        <input type="text" class="form-control" name="txtCorreoResponsable" id="correoResponsable" 
                        value="<?= $lstEquipo['correoResponsable'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="celularResponsable" class="form-label">Celular del Responsable</label>
                        <input type="text" class="form-control" name="txtCelularResponsable" id="celularResponsable" 
                        value="<?= $lstEquipo['celularResponsable'] ?>" readonly>
                    </div>


                    <div class="colo-12">
                        <a href="readAllEquipos.php?id=<?= $_SESSION['idGrupo'];?>" class="btn btn-success">Regresar</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                Detalles del Equipo
            </div>
        </div>
    </div>
    
<?php
    require_once("./template/footer.php");

?>