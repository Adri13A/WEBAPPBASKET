<?php
require_once("./template/header.php");
require_once("../../controllers/equiposController.php");
require_once("../../controllers/jugadoresController.php");

//Instanciamos controlador para ejecutar consulta
$objControl = new equiposController();
$objControlJ = new jugadoresController();

//Capturar el id del torneo
$lstEquipo = $objControl->readOneEquipo($_GET['id']);
$_SESSION['idEquipo'] = $_GET['id'];
$lstJugador = $objControlJ->readJugadoresEquipo($lstEquipo['nombreEquipo']);
?>

<div class="mx-auto p-5">
    <div class="card text-center">
        <div class="card-header">
            <b class="fs-4">
            <i class="fa-solid fa-people-group"></i> <?= $lstEquipo['nombreEquipo']?>
            </b>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="row mb-3">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Agregar Jugador
                        </div>
                        <div class="card-body">
                            <a href="frmJugadoresEquipo.php?id=<?= $lstEquipo['idEquipo'] ?>" class="btn btn-white rounded-5">
                                <img src="../img/equipoAgg.png" alt="Crear un jugador" width="180" height="180">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Listado de Jugadores
                        </div>
                        <div class="card-body">
                            <a href="readAllJugadoresEquipo.php?id=<?= $lstEquipo['idEquipo'] ?>" class="btn btn-white rounded-5">
                                <img src="../img/listado.png" alt="Lista de los jugadores" width="180" height="180">
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
    <div class="mx-auto p-3">
        <a href="readAllEquipos.php?id=<?= $_SESSION['idGrupo'] ?>" class="btn btn-primary">Regresar</a>
    </div>
</div>


<?php require_once("./template/footer.php"); ?>