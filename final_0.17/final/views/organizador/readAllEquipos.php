<?php
require_once("./template/header.php");
require_once("../../controllers/equiposController.php");
//Instanciamos controlador para ejecutar consulta
$objControl = new equiposController();
//Capturar registros en filas
$rows = $objControl->readEquipos($_GET['id']);
$_SESSION['idGrupo'] = $_GET['id'];

?>
<div class="mx-auto p-5">
    <div class="card text-center">
        <div class="card-header">
            <b class="fs-4">
                <span> <i class="fa-solid fa-people-group"></i></span> Listado de equipos
            </b>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre del Equipo</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows) : ?>
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <th><?= $row['idEquipo'] ?></th>
                                <th><?= $row['nombreEquipo'] ?></th>
                                <th><img src="<?= $row['logoEquipo'] ?>" alt="Crear un equipo" width="100" height="100"></th>
                                <th>
                                    <a href="readOneEquipo.php?id=<?= $row['idEquipo'] ?>" class="btn btn-primary"><span class="fa-solid fa-list-check"></span></a>
                                    <a href="updateEquipo.php?id=<?= $row['idEquipo'] ?>" class="btn btn-success"><span class="fa-solid fa-pen-to-square"></span></a>
                                    <a href="jugadores.php?id=<?= $row['idEquipo'] ?>" class="btn btn-warning"><span class="fa-solid fa-user-plus"></span></a>
                                    <!--Eliminar registro con modal-->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar<?= $row['idEquipo'] ?>">
                                        <span class="fa-solid fa-trash"></span>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="eliminar<?= $row['idEquipo'] ?>" tabindex="-1" aria-labelledby="eliminar<?= $row['idEquipo'] ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="eliminar<?= $row['idEquipo'] ?>">¿Desea eliminar el torneo?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Esta acción no se puede deshacer
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <a href="deleteEquipo.php?id=<?= $row['idEquipo'] ?>" class="btn btn-danger">Eliminar</a>
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
                                No hay grupos aún.
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
        <a href="grupo.php?id=<?= $_SESSION['idGrupo'] ?>" class="btn btn-primary">Regresar</a>
    </div>
</div>

<?php
require_once("./template/footer.php");

?>