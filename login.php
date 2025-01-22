<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Login</title>
    <link rel="stylesheet" href="./css/login-registro.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
</head>
<body>
    <audio autoplay loop muted id="background-audio">
        <source src="./audio/fondo.mp3" type="audio/mpeg">
    </audio>
    <div class="split-container">
        <div class="left">
            <img src="./images/logo.png" alt="Imagen" class="image">
            <img src="./images/logoled.png" alt="Logo Led" class="imgled">
        </div>
        <div class="right">
            <div class="container">
                <button class="button" id="loginButton">Iniciar Sesión</button>
                <h1 id="formTitle" style="display: none;">Iniciar Sesión</h1>

                <div class="form" id="loginForm">
                    <input type="text" placeholder="Usuario" id="username">
                    <input type="password" placeholder="Contraseña" id="password">
                    <div class="register">
                        ¿No tienes cuenta? <a href="#" id="registerLink">Registrar</a>
                    </div>
                    <button class="enter-button" id="enterButton">Enter</button>
                </div>

                <div class="form-register" id="registerForm">
                    <input type="text" placeholder="Usuario" id="regUsername">
                    <input type="email" placeholder="Correo Electrónico" id="regEmail">
                    <input type="password" placeholder="Contraseña" id="regPassword">
                    <div class="register">
                        ¿Ya tienes cuenta? <a href="#" id="loginLink">Iniciar Sesión</a>
                    </div>
                    <div class="register">
                        ¿Eres Artista? <a href="planes.php" id="loginLink">Elige tu Plan</a>
                    </div>
                    <button class="enter-button" id="registerButton">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/login-gegistro.js"></script>
</body>
</html>
