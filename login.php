<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="icon" type="image/png" href="./PICTURES/GamerRoom-Logo.png">
    <link rel="stylesheet" href="./CSS/index.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;"> <!-- Centra verticalmente el contenido -->
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
                <form class="bg-white p-4 shadow rounded formLogin" action="./estudiante/vistaEstudiante/comidahoy.php" method="post">
                <h2 class="text-center mb-4">Bienvenidos a la Cafetería de la UTRs</h2>
                    <img src="./IMG/logoUTR.png" alt="Logo de la Empresa" class="logo">
                    <h3 class="text-center mb-4">Iniciar Sesión</h3>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="correo" name="email" placeholder="Ingresa tu correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="contraseña" name="password" placeholder="Ingresa tu contraseña" required autocomplete="current-password">
                        </div>
                    </div>

                    <!-- Widget de reCAPTCHA -->
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LeYFMUqAAAAAFywpj-AJE-aCsww9ZbkWGnt-iAP"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="btnLogin">Iniciar Sesión</button>
                    <p class="text-center mt-3">¿No tienes una cuenta? <a href="./registro.php">Regístrate aquí</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="./JS/showPassword.js"></script>
<script src="./JS/recordarDatos.js"></script>
</html>