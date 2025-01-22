<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider de Imágenes con Descripción</title>
    <link rel="stylesheet" href="./css/artistas.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miembros de la Empresa</title>
    <link rel="stylesheet" href="styles.css">
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
    <main>
        <section class="team-container">
            <div class="team-member" onclick="toggleDescription(0)">
                <img src="./images/artistas/kl.jpg" alt="Miembro 1">
                <h3>Kendrick Lamar</h3>
                <p class="role">SINGER</p>
                <p class="description">Pray for me / Black Panther</p>
                <button class="toggle-description">Leer más</button>
            </div>

            <div class="team-member" onclick="toggleDescription(1)">
                <img src="./images/artistas/altj.jpg" alt="Miembro 2">
                <h3>ALT-J</h3>
                <p class="role">GROUP</p>
                <p class="description">Let Hand Free /  Capitan America: Civil War</p>
                <button class="toggle-description">Leer más</button>
            </div>

            <div class="team-member" onclick="toggleDescription(2)">
                <img src="./images/artistas/dr.jpg" alt="Miembro 3">
                <h3>David Rees</h3>
                <p class="role">SINGER</p>
                <p class="description">Live To Rise / Marvel: The Avengers</p>
                <button class="toggle-description">Leer más</button>
            </div>

            <div class="team-member" onclick="toggleDescription(3)">
                <img src="./images/artistas/id.jpg" alt="Miembro 3">
                <h3>Imagine Dragons</h3>
                <p class="role">GROUP</p>
                <p class="description">Believer / Avengers: Infinity War</p>
                <button class="toggle-description">Leer más</button>
            </div>

            <div class="team-member" onclick="toggleDescription(4)">
                <img src="./images/artistas/mora.jpg" alt="Miembro 3">
                <h3>Mora</h3>
                <p class="role">SINGER</p>
                <p class="description">Ansiedades / Spider-Man: Across the Spider-Verse </p>
                <button class="toggle-description">Leer más</button>
            </div>

            <div class="team-member" onclick="toggleDescription(5)">
                <img src="./images/artistas/riha.jpg" alt="Miembro 3">
                <h3>Rihanna</h3>
                <p class="role">SINGER</p>
                <p class="description">Born Again / Black Panther: Wakanda Forever</p>
                <button class="toggle-description">Leer más</button>
            </div>

            <div class="team-member" onclick="toggleDescription(6)">
                <img src="./images/artistas/sza.jpg" alt="Miembro 3">
                <h3>SZA</h3>
                <p class="role">SINGER</p>
                <p class="description">All the Stars / Black Panther: Wakanda Forever</p>
                <button class="toggle-description">Leer más</button>
            </div>
        </section>
    </main>
</body>
</html>
    <script src="./js/artistas.js"></script>
</body>
</html>
