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
            <form action="torneosInsert.php" method="POST">
                <div class="mb-3">
                    <label for="nombreTorneo" class="form-label">Nombre del torneo (ID: <?= $lstTorneo['idTorneo'] ?>)</label>
                    <input type="text" class="form-control" name="txtNombreTorneo" id="nombreTorneo" value="<?= $lstTorneo['nombreTorneo'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="organizador" class="form-label">Organizador del torneo (Nombre completo)</label>
                    <input type="text" class="form-control" name="txtOrganizador" id="organizador" value="<?= $lstTorneo['organizador'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="patrocinadores" class="form-label">Patrocinador(es)</label>
                    <textarea name="txtPatrocinadores" id="patrocinadores" col="30" rows="3" class="form-control" readonly><?= $lstTorneo['patrocinadores'] ?></textarea>
                    <span id="patrocinadores" class="form-text">
                        Atención: Se puede separar con "," si hay más de un patrocinador.
                    </span>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="sede" class="form-label">Sede (cancha)</label>
                            <input type="text" class="form-control" name="txtSede" id="sede" value="<?= $lstTorneo['sede'] ?>" readonly>
                        </div>
                    </div>
                    <!--<div class="col mb-3">
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoria</label>
                                <input list="lstCategorias" class="form-control" name="txtCategoria" id="categoria" 
                                value="<?= $lstTorneo['categoria'] ?>"readonly>
                            </div>
                        </div>-->
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="premio1" class="form-label">Premio 1er. Lugar</label>
                        <input type="text" class="form-control" id="premio1" name="txtPremio1" value="<?= $lstTorneo['premio1erLugar'] ?>" readonly>
                    </div>
                    <div class="col mb-3">
                        <label for="premio2" class="form-label">Premio 2do. Lugar</label>
                        <input type="text" class="form-control" id="premio2" name="txtPremio2" value="<?= $lstTorneo['premio2doLugar'] ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="premio3" class="form-label">Premio 3er. Lugar</label>
                        <input type="text" class="form-control" id="premio3" name="txtPremio3" value="<?= $lstTorneo['premio3erLugar'] ?>" readonly>
                    </div>
                    <div class="col mb-3">
                        <label for="otroPremio" class="form-label">Otro Premio (Campeón canastero)</label>
                        <input type="text" class="form-control" id="otroPremio" name="txtOtroPremio" value="<?= $lstTorneo['otroPremio'] ?>" readonly>
                    </div>
                </div>
                <!--Usuario y contraseña para el organizador del evento-->
                <hr>
                <b>
                    <span></span><i class="fa-solid fa-user"></i></span> Usuario y contraseña del organizador
                </b>
                <div class="row">
                    <div class="col mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="txtUsuario" value="<?= $lstTorneo['usuarioOrganizador'] ?>" readonly>
                    </div>
                    <div class="col mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="pass" name="txtPass" value="<?= $lstTorneo['contrasenaOrganizador'] ?>" readonly>
                    </div>
                </div>
                <div class="colo-12">
                    <a href="readAllTorneos.php" class="btn btn-success">Regresar</a>
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