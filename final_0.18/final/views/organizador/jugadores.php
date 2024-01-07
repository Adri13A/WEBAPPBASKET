<?php require_once("./template/header.php"); ?>
<div class="mx-auto p-5">
    <div class="card text-center">
        <div class="card-header">
            <b class="fs-3">
                <i class="fa-solid fa-trophy"></i>
             Jugadores
            </b>
        </div>
        <div class="card-body">
            <h5 class="card-title"> </h5>
            <div class="row mb-3">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Agregar jugador al Torneo
                        </div>
                        <div class="card-body">
                            <a href="frmJugadores.php" class="btn btn-white rounded-5">
                                <img src="../../views/img/jugadorAgg.png" alt="Agregar jugador al torneo" width="200" height="200">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Lista de jugadores
                        </div>
                        <div class="card-body">
                            <a href="readAllJugadores.php" class="btn btn-white rounded-5">
                                <img src="../../views/img/lstJugadores.png" alt="Crear un torneo" width="200" height="200">
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
                            Listado de Grupos del Torneo
                        </div>
                        <div class="card-body">
                            <a href="" class="btn btn-white rounded-5">
                                <img src="" alt="" width="200" height="200">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Jugadores
                        </div>
                        <div class="card-body">
                            <a href="" class="btn btn-white rounded-5">
                                <img src="" alt="" width="200" height="200">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="card-footer text-body-secondary">
            Configuración de torneos. Web App Basketball
        </div>
    </div>
    <div class="mx-auto p-3">
        <a href="organizador.php" class="btn btn-primary">Regresar</a>
    </div>
</div>


<?php require_once("./template/footer.php"); ?>