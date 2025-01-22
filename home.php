<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIR AVENGERS</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
</head>
<body>
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
    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="./audio/home.mp4" type="video/mp4">
        </video>
    </div>
    <main class="main-content">
        <div class="intro">
            <h1 class="letra">ASIR AVENGERS</h1>
            <h2>YOUR IT HEROES</h2>
        </div>
    </main>

    <!-- MEJORES CANCIONES -->
    <section class="apartado" id="mejores-canciones">
        <h2>Mejores Canciones</h2>
        <div class="Canc">
            <!-- Primer Canción -->
            <div class="cancion">
                <img src="./images/canciones/canc1.jpg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-cancion">The Hero of the Multiverse</h3>
                <p class="autor-cancion">Laura Karpman & Nor Kroll-Rosenbaum</p>
                <p class="fecha-cancion">2024</p>
            </div>

            <!-- Segunda Canción -->
            <div class="cancion">
                <img src="./images/canciones/canc2.jpg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-cancion">Purpose Is Glorious</h3>
                <p class="autor-cancion">Natalie Holt</p>
                <p class="fecha-cancion">2023</p>
            </div>

            <!-- Tercera Canción -->
            <div class="cancion">
                <img src="./images/canciones/canc3.jpg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-cancion">Born Again</h3>
                <p class="autor-cancion">Rihanna</p>
                <p class="fecha-cancion">2022</p>
            </div>
        </div>
    </section>

    <!-- ULTIMOS ALBUMES -->
    <section class="apartado" id="ultimos-albumes">
        <h2>Ultimos Albumes</h2>
        <div class="Album">
            <!-- Primer Album -->
            <div class="album">
                <img src="./images/albumes/album1.jpeg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-album">The Avengers</h3>
                <p class="autor-album">Alan Silvestri</p>
                <p class="fecha-album">Fecha de Lanzamiento: 2023-01-01</p>
            </div>

            <!-- Segundo Album -->
            <div class="album">
                <img src="./images/albumes/album2.jpg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-album">The Avengers: Endgame</h3>
                <p class="autor-album">Alan Silvestri</p>
                <p class="fecha-album">Fecha de Lanzamiento: 2023-01-01</p>
            </div>

            <!-- Tercer Album -->
            <div class="album">
                <img src="./images/albumes/album3.jpg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-album">Guardians of the galaxy vol.2</h3>
                <p class="autor-album">Tyler Bates</p>
                <p class="fecha-album">Fecha de Lanzamiento: 2023-01-01</p>
            </div>
        </div>
    </section>

    <!-- NOTICIAS -->
    <section class="apartado" id="noticias">
        <h2>Noticias</h2>
        <div class="Noticia">
            <!-- Primera Noticia -->
            <div class="noticia">
                <img src="./images/noticias/liam.jpg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-noticia">Fallece el cantante Liam Payne de One Direction</h3>
                <p class="autor-noticia">Asir Avengers</p>
                <p class="fecha-noticia">Fecha de Lanzamiento: 2023-01-01</p>
            </div>

            <!-- Segunda Noticia -->
            <div class="noticia">
                <img src="./images/noticias/tay.jpg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-noticia">Conciertazo de Taylor Swift en Madrid</h3>
                <p class="autor-noticia">Asir Avengers</p>
                <p class="fecha-noticia">Fecha de Lanzamiento: 2023-01-01</p>
            </div>

            <!-- Tercera noticia -->
            <div class="noticia">
                <img src="./images/noticias/hans.jpeg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-noticia">Locura en Zaragoza con Hans Zimmer</h3>
                <p class="autor-noticia">Asir Avengers</p>
                <p class="fecha-noticia">Fecha de Lanzamiento: 2023-01-01</p>
            </div>

            <!-- Cuarta noticia -->
            <div class="noticia">
                <img src="./images/noticias/id.jpg" alt="Imagen de la canción" class="imagen-cancion">
                <h3 class="nombre-noticia">Revindicacion de Imagine Dragons</h3>
                <p class="autor-noticia">Asir Avengers</p>
                <p class="fecha-noticia">Fecha de Lanzamiento: 2023-01-01</p>
            </div>
        </div>
    </section>
    <script src="./script/home.js"></script>
</body>
</html>
