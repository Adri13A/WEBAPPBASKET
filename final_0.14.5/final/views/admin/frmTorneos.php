<?php require_once("./template/header.php"); ?>
<div class="mx-auto p-5">
    <div class="card">
        <div class="card-header">
            <span><i class="fa-solid fa-trophy"></i></span> Capturar la información del torneo
        </div>
        <div class="card-body">
            <form action="torneosInsert.php" method="POST">
                <div class="mb-3">
                    <label for="nombreTorneo" class="form-label">Nombre del torneo</label>
                    <input type="text" class="form-control" name="txtNombreTorneo" id="nombreTorneo" required>
                </div>
                <div class="mb-3">
                    <label for="organizador" class="form-label">Organizador del torneo (Nombre completo)</label>
                    <input type="text" class="form-control" name="txtOrganizador" id="organizador" required>
                </div>
                <div class="mb-3">
                    <label for="patrocinadores" class="form-label">Patrocinador(es)</label>
                    <textarea name="txtPatrocinadores" id="patrocinadores" col="30" rows="3" class="form-control" required></textarea>
                    <span id="patrocinadores" class="form-text">
                        Atención: Se puede separar con "," si hay más de un patrocinador.
                    </span>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="col mb-3">
                            <label for="sede" class="form-label">Sede (cancha)</label>
                            <input type="text" class="form-control" name="txtSede" id="sede" required>
                        </div>
                    </div>
                    <!--<div class="col mb-3">
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria</label>
                            <input list="lstCategorias" class="form-control" name="txtCategoria" id="categoria" required>
                            <datalist id="lstCategorias">
                                <option value="1ra. fuerza">
                                <option value="2da. fuerza">
                                <option value="Veteranos">
                                <option value="Libre">
                                <option value="Juvenil">
                                <option value="Femenil">
                                <option value="Empresarial">
                                <option value="Infantil">
                                <option value="Minibasket">
                            </datalist>
                        </div>
                    </div>-->
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="premio1" class="form-label">Premio 1er. Lugar</label>
                        <input type="text" class="form-control" id="premio1" name="txtPremio1" required>
                    </div>
                    <div class="col mb-3">
                        <label for="premio2" class="form-label">Premio 2do. Lugar</label>
                        <input type="text" class="form-control" id="premio2" name="txtPremio2" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="premio3" class="form-label">Premio 3er. Lugar</label>
                        <input type="text" class="form-control" id="premio3" name="txtPremio3" required>
                    </div>
                    <div class="col mb-3">
                        <label for="otroPremio" class="form-label">Otro Premio (Campeón canastero)</label>
                        <input type="text" class="form-control" id="otroPremio" name="txtOtroPremio" required>
                    </div>
                </div>
                <!--Usuario y contraseña para el organizador del evento-->
                <div class="row">
                    <div class="col mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="txtUsuario" required>
                    </div>
                    <div class="col mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass" name="txtPass" required>
                    </div>
                </div> 
                <div class="col mb-3">
                    <button type="submit" class ="btn btn-primary">Guardar</button>
                    <a href="admin.php" class="btn btn-danger">Cancelar</a>
                </div> 
            </form>
        </div>
        <div class="card-footer">
            Formulario para registrar torneos
        </div>
    </div>
</div>
<?php require_once("./template/footer.php"); ?>