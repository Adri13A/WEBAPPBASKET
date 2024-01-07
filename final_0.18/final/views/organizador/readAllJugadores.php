<?php
require_once("./template/header.php");
require_once("../../controllers/jugadoresController.php");

//Instanciamos controlador para ejecutar consulta
$objControlJ = new jugadoresController();

$rows = $objControlJ->readJugadores($_SESSION['idTorneo']);
?>
<div class="mx-auto p-5">
    <div class="card text-center">
        <div class="card-header">
            <b class="fs-4">
                <span> <i class="fa-solid fa-people-group"></i></span> Listado de los jugadores del Torneo: <?= $_SESSION['nombreTorneo'] ?>
            </b>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre del Jugador</th>
                        <th scope="col">Equipo</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows) : ?>
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <th><?= $row['idJugador'] ?></th>
                                <th><?= $row['nombreJugador'] . ' ' . $row['apellidosJugador'] ?></th>
                                <th><?= $row['nombreEquipo'] ?></th>
                                <th><img src="<?= $row['fotoJugador'] ?>" alt="Foto del jugador <?= $row['nombreJugador'] . ' ' . $row['apellidosJugador'] ?>" width="100" height="100"></th>
                                <th>
                                    <a href="readOneJugador.php?id=<?= $row['idJugador'] ?>" class="btn btn-primary"><span class="fa-solid fa-list-check"></span></a>
                                    <a href="updateJugador.php?id=<?= $row['idJugador'] ?>" class="btn btn-success"><span class="fa-solid fa-pen-to-square"></span></a>
                                    <a href="estadisticasJugador.php?id=<?= $row['idJugador'] ?>" class="btn btn-warning"><span class="fa-solid fa-medal"></span></a>
                                    <!--Eliminar registro con modal-->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar<?= $row['idJugador'] ?>">
                                        <span class="fa-solid fa-trash"></span>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="eliminar<?= $row['idJugador'] ?>" tabindex="-1" aria-labelledby="eliminar<?= $row['idJugador'] ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="eliminar<?= $row['idJugador'] ?>">¿Desea eliminar al jugador?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Esta acción no se puede deshacer
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <a href="deleteJugador.php?id=<?= $row['idJugador'] ?>" class="btn btn-danger">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3" class="text-center">
                                No hay jugadores aún.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
    <div class="mx-auto p-3">
        <a href="jugadores.php" class="btn btn-primary">Regresar</a>
    </div>
</div>

<?php
require_once("./template/footer.php");

?>