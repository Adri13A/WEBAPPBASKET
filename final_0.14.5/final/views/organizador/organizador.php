<?php require_once("./template/header.php"); ?>
<div class="mx-auto p-5">
    <div class="card text-center">
        <div class="card-header">
            <b class="fs-3">Torneo <?php echo $_SESSION['idTorneo']; ?>
            <?php echo $_SESSION['nombreTorneo']; ?></b>
        </div>
        <div class="card-body">
            <h5 class="card-title">  </h5>
            <div class="row mb-3">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Información del torneo Torneo
                        </div>
                        <div class="card-body">
                            <a href="informacionTorneo.php" class="btn btn-primary">
                                <img src="../img/torneo.png" alt="Información del torneo" width="180" height="180">
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
                            <a href="readAllTorneos.php" class="btn btn-primary">
                                <img src="../img/lstTorneo.png" alt="Crear un torneo" width="180" height="180">
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