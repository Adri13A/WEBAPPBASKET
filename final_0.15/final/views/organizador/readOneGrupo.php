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
            <div class="card-header">
                Información del Grupo
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nombreGrupo" class="form-label">Nombre del torneo (ID: <?= $lstGrupo['idGrupo'] ?>)</label>
                        <input type="text" class="form-control" name="txtNombreGrupo" id="nombreGrupo" 
                        value="<?= $lstGrupo['nombreGrupo'] ?>" readonly>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoria</label>
                                <input list="lstCategorias" class="form-control" name="txtCategoria" id="categoria" 
                                value="<?= $lstGrupo['categoria'] ?>"readonly>
                            </div>
                        </div>
                    </div>


                    <div class="colo-12">
                        <a href="readAllGrupos.php" class="btn btn-success">Regresar</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                Detalles del grupo
            </div>
        </div>
    </div>
    
<?php
    require_once("./template/footer.php");

?>