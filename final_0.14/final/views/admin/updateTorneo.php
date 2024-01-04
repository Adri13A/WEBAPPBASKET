<?php
    require_once("./template/header.php");
    require_once("../../controllers/torneosController.php");
    //Instanciamos controlador para ejecutar consulta
    $objControl = new torneosController();
    //Capturar el id del torneo
    $lstTorneo = $objControl->readOneTorneo($_GET['id']);
    
?>
    <div class="mx-auto p-5">
        <div class="card">
            <div class="card-header">
                Información del torneo
            </div>
            <div class="card-body">
                <form action="torneoUpdate.php" method="POST">
                    <div class="mb-3">
                        <label for="idTorneo" class="form-label">Id del torneo</label>
                        <input type="text" class="form-control" name="txtId" id="idTorneo" 
                        value="<?= $lstTorneo['idTorneo'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nombreTorneo" class="form-label">Nombre del torneo</label>
                        <input type="text" class="form-control" name="txtNombreTorneo" id="nombreTorneo" 
                        value="<?= $lstTorneo['nombreTorneo'] ?>" >
                    </div>
                    <div class="mb-3">
                        <label for="organizador" class="form-label">Organizador del torneo (Nombre completo)</label>
                        <input type="text" class="form-control" name="txtOrganizador" id="organizador"
                        value="<?= $lstTorneo['organizador'] ?>" >
                    </div>
                    <div class="mb-3">
                        <label for="patrocinadores" class="form-label">Patrocinador(es)</label>
                        <textarea name="txtPatrocinadores" id="patrocinadores" col="30" rows="3" class="form-control" ><?= $lstTorneo['patrocinadores'] ?></textarea>
                        <span id="patrocinadores" class="form-text">
                            Atención: Se puede separar con "," si hay más de un patrocinador.
                        </span>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <div class="col mb-3">
                                <label for="sede" class="form-label">Sede (cancha)</label>
                                <input type="text" class="form-control" name="txtSede" id="sede" 
                                value="<?= $lstTorneo['sede'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="premio1" class="form-label">Premio 1er. Lugar</label>
                            <input type="text" class="form-control" id="premio1" name="txtPremio1"
                            value="<?= $lstTorneo['premio1erLugar'] ?>" >
                        </div>
                        <div class="col mb-3">
                            <label for="premio2" class="form-label">Premio 2do. Lugar</label>
                            <input type="text" class="form-control" id="premio2" name="txtPremio2" 
                            value="<?= $lstTorneo['premio2doLugar'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="premio3" class="form-label">Premio 3er. Lugar</label>
                            <input type="text" class="form-control" id="premio3" name="txtPremio3" 
                            value="<?= $lstTorneo['premio3erLugar'] ?>">
                        </div>
                        <div class="col mb-3">
                            <label for="otroPremio" class="form-label">Otro Premio (Campeón canastero)</label>
                            <input type="text" class="form-control" id="otroPremio" name="txtOtroPremio" 
                            value="<?= $lstTorneo['otroPremio'] ?>">
                        </div>
                    </div>
                    <div class="col mb-3">
                        <button type="submit" class ="btn btn-primary">Guardar</button>
                        <a href="readAllTorneos.php" class="btn btn-danger">Cancelar</a>
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