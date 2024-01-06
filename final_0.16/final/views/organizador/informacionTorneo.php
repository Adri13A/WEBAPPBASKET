<?php
    require_once("./template/header.php");
?>
    <div class="mx-auto p-5">
        <div class="card">
            <div class="card-header text-center">
                <b class="fs-4"><i class="fa-solid fa-circle-info"></i> Información del torneo</b>
            </div>
            <div class="card-body">
                <form action="torneosInsert.php" method="POST">
                    <div class="mb-3">
                        <label for="nombreTorneo" class="form-label">Nombre del torneo (ID: <?= $_SESSION['idTorneo']; ?>)</label>
                        <input type="text" class="form-control" name="txtNombreTorneo" id="nombreTorneo" 
                        value="<?= $_SESSION['nombreTorneo']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="organizador" class="form-label">Organizador del torneo (Nombre completo)</label>
                        <input type="text" class="form-control" name="txtOrganizador" id="organizador"
                        value="<?= $_SESSION['organizador']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="patrocinadores" class="form-label">Patrocinador(es)</label>
                        <textarea name="txtPatrocinadores" id="patrocinadores" col="30" rows="3" class="form-control" readonly><?= $_SESSION['patrocinadores']; ?></textarea>
                        <span id="patrocinadores" class="form-text">
                            Atención: Se puede separar con "," si hay más de un patrocinador.
                        </span>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <div class="col mb-3">
                                <label for="sede" class="form-label">Sede (cancha)</label>
                                <input type="text" class="form-control" name="txtSede" id="sede" 
                                value="<?= $_SESSION['sede']; ?>"readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="premio1" class="form-label">Premio 1er. Lugar</label>
                            <input type="text" class="form-control" id="premio1" name="txtPremio1"
                            value="<?= $_SESSION['premio1erLugar']; ?>" readonly>
                        </div>
                        <div class="col mb-3">
                            <label for="premio2" class="form-label">Premio 2do. Lugar</label>
                            <input type="text" class="form-control" id="premio2" name="txtPremio2" 
                            value="<?= $_SESSION['premio2doLugar']; ?>"readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="premio3" class="form-label">Premio 3er. Lugar</label>
                            <input type="text" class="form-control" id="premio3" name="txtPremio3" 
                            value="<?= $_SESSION['premio3erLugar']; ?>"readonly>
                        </div>
                        <div class="col mb-3">
                            <label for="otroPremio" class="form-label">Otro Premio (Campeón canastero)</label>
                            <input type="text" class="form-control" id="otroPremio" name="txtOtroPremio" 
                            value="<?= $_SESSION['otroPremio']; ?>"readonly>
                        </div>
                    </div>
                    <div class="colo-12">
                        <a href="organizador.php" class="btn btn-primary">Regresar</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                Detalles del torneo
            </div>
        </div>
    </div>
    
<?php
    require_once("./template/footer.php");

?>