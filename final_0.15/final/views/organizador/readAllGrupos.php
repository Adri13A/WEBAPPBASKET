<?php
    require_once("./template/header.php");
    require_once("../../controllers/gruposController.php");
    //Instanciamos controlador para ejecutar consulta
    $objControl = new gruposController();
    //Capturar registros en filas
    $rows = $objControl->readGrupos($_SESSION['idTorneo']);

?>
    <div class="mx-auto p-5">
        <div class="card text-center">
            <div class="card-header">
            <span><i class="fa-solid fa-trophy"></i></span> Listado de grupos
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if($rows): ?>
                            <?php foreach($rows as $row): ?>
                                <tr>
                                    <th><?= $row['idGrupo'] ?></th>
                                    <th><?= $row['nombreGrupo'] ?></th>
                                    <th><?= $row['categoria'] ?></th>
                                    <th>
                                        <a href="readOneGrupo.php?id=<?=$row['idGrupo']?>" class="btn btn-primary"><span class="fa-solid fa-list-check"></span></a>
                                        <a href="updateGrupo.php?id=<?=$row['idGrupo']?>" class="btn btn-success"><span class="fa-solid fa-pen-to-square"></span></a>
                                        <!--Eliminar registro con modal-->
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar<?=$row['idGrupo']?>">
                                        <span class="fa-solid fa-trash"></span>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="eliminar<?=$row['idGrupo']?>" tabindex="-1" aria-labelledby="eliminar<?=$row['idGrupo']?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="eliminar<?=$row['idGrupo']?>">¿Desea eliminar el torneo?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Esta acción no se puede deshacer
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <a href="deleteGrupo.php?id=<?=$row['idGrupo']?>" class="btn btn-danger">Eliminar</a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
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
            <a href="organizador.php" class="btn btn-primary">Regresar</a>
        </div>
    </div>
    
<?php
    require_once("./template/footer.php");

?>