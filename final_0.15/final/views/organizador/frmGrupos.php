<?php require_once("./template/header.php"); ?>
<div class="mx-auto p-5">
    <div class="card">
        <div class="card-header">
            <span><i class="fa-solid fa-trophy"></i></span> Capturar la información del grupo
        </div>
        <div class="card-body">
            <form action="gruposInsert.php" method="POST">
                <div class="mb-3">
                    <label for="nombreGrupo" class="form-label">Nombre del grupo</label>
                    <input type="text" class="form-control" name="txtNombreGrupo" id="nombreGrupo" required>
                </div>
                <div class="row">
                    <div class="col mb-3">
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
                    </div>
                </div>
                <div class="col mb-3">
                    <button type="submit" class ="btn btn-primary">Guardar</button>
                    <a href="organizador.php" class="btn btn-danger">Cancelar</a>
                </div> 
            </form>
        </div>
        <div class="card-footer">
            Formulario para registrar grupos
        </div>
    </div>
</div>
<?php require_once("./template/footer.php"); ?>