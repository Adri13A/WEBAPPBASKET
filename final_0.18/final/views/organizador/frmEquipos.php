<?php
    require_once("./template/header.php");
    require_once("../../controllers/gruposController.php");
    //Instanciamos controlador para ejecutar consulta
    $objControl = new gruposController();
    //Capturar el id del torneo
    $lstGrupo = $objControl->readOneGrupo($_GET['id']); 
?>

<div class="mx-auto p-5">
    <div class="card">
        <div class="card-header text-center">
           <b class="fs-4"> <span> <i class="fa-solid fa-people-group"></i></span> Capturar la información del equipo</b>
        </div>
        <div class="card-body">
            <form action="equiposInsert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombreEquipo" class="form-label">Nombre del equipo</label>
                    <input type="text" class="form-control" name="txtNombreEquipo" id="nombreEquipo" required>
                </div>
                <div class="mb-3">
                    <label for="nombreResponsable" class="form-label">Nombre del Responsable (Nombre completo)</label>
                    <input type="text" class="form-control" name="txtNombreResponsable" id="nombreResponsable" required>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="correoResponsable" class="form-label">Correo del Responsable</label>
                            <input type="email" class="form-control" name="txtCorreoResponsable" id="correoResponsable" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="celularResponsable" class="form-label">Celular del Responsable</label>
                        <input type="text" class="form-control" id="celularResponsable" name="txtCelularResponsable" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="logoEquipo" class="form-label">Logo del Equipo</label>
                        <input type="file" class="form-control" id="logoEquipo" name="txtLogoEquipo" required>
                    </div>
                </div>
                        <input type="hidden" class="form-control" id="idGrupo" name="txtIdGrupo" value="<?= $lstGrupo['idGrupo'] ?>">

                <div class="col mb-3">
                    <button type="submit" class ="btn btn-primary">Guardar</button>
                    <a href="grupo.php" class="btn btn-danger">Cancelar</a>
                </div> 
            </form>
        </div>
        <div class="card-footer">
            Formulario para registrar equipos
        </div>
    </div>
</div>
<?php require_once("./template/footer.php"); ?>