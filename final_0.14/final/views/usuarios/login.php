<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="../../views/src/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="containerP">
        <div style="flex:1;">
            <img src="../../views/img/session.png" alt="" style="width: 100%; max-width: 450px; height: 100%;">
        </div>

        <div class="form-containerP">
            <h2>Bienvendido de Regreso</h2>
            <form action="autenticarUsuario.php" method="POST" class="mt-5">
                <div class="form-floating">
                    <input type="text" id="floatingInput" name="txtUsuario" class="form-control"  placeholder="Ingrese aquí su usuario" required>
                    <label for="floatingInput" class="">Correo</label>
                </div>

                <div class="form-floating mt-3">
                    <input type="password" id="floatingPassword" name="txtPassword" class="form-control"  placeholder="Contraseña" required>
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <button type="submit" class="btnP mt-5">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>

</html>