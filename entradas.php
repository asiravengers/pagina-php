<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIR AVENGERS</title>
    <link rel="stylesheet" href="./css/entradas.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <script src="./script/confeti.js"></script>
</head>
<body>
<audio id="background-audio" loop autoplay>
    <source src="./audio/fondo.mp3" type="audio/mp3">
  </audio>
    <header class="header">
        <a href="home.php" class="logo">AA</a>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="artistas.php">Artistas</a></li>
                <li><a href="./login.php" class="login-link">Login/Registro</a></li>
            </ul>
        </nav>
    </header>

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
                <h1>Formulario de Entradas</h1>
                <form action="#" method="POST" class="entradas-form">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="gmail">Gmail</label>
                        <input type="email" id="gmail" name="gmail" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="entradas">Número de Entradas</label>
                        <select id="entradas" name="entradas" required>
                            <option value="1">1 Entrada</option>
                            <option value="2">2 Entradas</option>
                            <option value="3">3 Entradas</option>
                            <option value="4">4 Entradas</option>
                            <option value="5">5 Entradas</option>
                            <option value="6">6 Entradas</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
