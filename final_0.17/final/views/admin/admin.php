<?php require_once("./template/header.php"); ?>

<div class="mx-auto p-5">
    <div class="card text-center">
        <div class="card-header">
            <b class="fs-4">Menú Administrador</b>
            <a href="../../controllers/logoutController.php" class="btn btn-danger" style="float: right;">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="row mb-3">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Crear Torneo
                        </div>
                        <div class="card-body">
                            <a href="frmTorneos.php" class="btn btn-white rounded-5">
                                <img src="../../views/img/trophy.png" alt="Información del torneo" width="200" height="200">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Listado de Torneos
                        </div>
                        <div class="card-body">
                            <a href="readAllTorneos.php" class="btn btn-white rounded-5">
                                <img src="../../views/img/grupos.png" alt="Crear un torneo" width="200" height="200">
                            </a>
                        </div>
                    </div>
                </div>

                <!--Nueva fila en la card-->
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Estadísticas
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Anuncios
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="card-footer text-body-secondary">
            Configuración de torneos. Web App Basketball
        </div>
    </div>
</div>


<?php require_once("./template/footer.php"); ?>