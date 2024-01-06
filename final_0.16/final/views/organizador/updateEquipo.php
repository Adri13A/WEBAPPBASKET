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
                <form action="equipoUpdate.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="idEquipo" class="form-label">Id del equipo</label>
                        <input type="text" class="form-control" name="txtId" id="idEquipo" 
                        value="<?= $lstEquipo['idEquipo'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nombreEquipo" class="form-label">Nombre del Equipo</label>
                        <input type="text" class="form-control" name="txtNombreEquipo" id="nombreEquipo" 
                        value="<?= $lstEquipo['nombreEquipo'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombreResponsable" class="form-label">Nombre del Responsable</label>
                        <input type="text" class="form-control" name="txtNombreResponsable" id="nombreResponsable" 
                        value="<?= $lstEquipo['nombreResponsable'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="correoResponsable" class="form-label">Correo del Responsable</label>
                        <input type="text" class="form-control" name="txtCorreoResponsable" id="correoResponsable" 
                        value="<?= $lstEquipo['correoResponsable'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="celularResponsable" class="form-label">Celular del Responsable</label>
                        <input type="text" class="form-control" name="txtCelularResponsable" id="celularResponsable" 
                        value="<?= $lstEquipo['celularResponsable'] ?>" required>
                    </div>
                    <div class="col mb-3">
                        <label for="logoEquipo" class="form-label">Logo del Equipo</label>
                        <th><img src="<?= $lstEquipo['logoEquipo'] ?>" alt="Logo del equipo" width="100" height="100" name="txtLogoViejo"></th>
                        <input type="file" class="form-control" id="logoEquipo" name="txtLogoEquipo">
                        <input type="hidden" class="form-control" name="txtLogoEquipoViejo" id="logoEquipoViejo" 
                        value="<?= $lstEquipo['logoEquipo'] ?>">
                    </div>
                
                    <div class="col mb-3">
                        <button type="submit" class ="btn btn-primary">Guardar</button>
                        <a href="readAllEquipos.php?id=<?= $_SESSION['idGrupo'] ?>" class="btn btn-danger">Cancelar</a>
                    </div>  
                </form>
            </div>
            <div class="card-footer">
                Detalles del equipo
            </div>
        </div>
    </div>
    
<?php
    require_once("./template/footer.php");

?>