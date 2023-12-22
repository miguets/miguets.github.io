<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/TE.css">
</head>
<body>
    <header>
        <nav class="nav">
            <figure>
               <a href="../index.html" class="logo-link"><img src="../Sources/logo.png" alt="Logo" class="logo"></a> 
            </figure>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../index.html#miguetsinfo">Sobre Mi</a></li>
                <li><a href="../index.html#cards-info">Proyectos</a></li>
                <li><a href="#">Trayectoria Escom</a></li>
                <li><a href="./HYH.html">Hobbies y Habilidades</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            include("./php/trayectoria.php");
        ?>
        <section>
            <article>
                <div id="mapdata">
                    <h2 id="mapatoph">Mapa Curricular Escom (2020)</h2>
                    <p id="mapatopp">Ingenieria En Sistemas Computacionales</p>
                    <div class="contnom">
                        <p class="nomen">Nomenclatura:</p>
                        <div class="nomenclature">
                            <p class="nottaken">No Cursado</p>
                            <p class="taken">Cursado</p>
                            <p class="studyng">Aún Cursando</p>
                        </div>
                    </div>
                </div>
                <?php
                generarHTML($semesters);
                ?>
            </article>
        </section>
    </main>
    <footer class="footer">
        <p class="footer-autor">Creado por Miguets</p>
        <p class="footer-contact">Contacto:</p>
        <div class="contact-links">
            <a href="https://github.com/miguets" target="_blank">Github<img src="../Sources/github_logo.png" alt="Github Logo" width="25" height="25"/></a>
            <a href="https://www.linkedin.com/in/miguets/" target="_blank">Linkedin<img src="../Sources/linkedin-logo.webp" alt="Linkedin Logo" width="25" height="25"/></a>
            <a href="https://twitter.com/miguetss" target="_blank">Twitter<img src="../Sources/twitter-logo.png" alt="Twitter Logo" width="25" height="25"/></a>
        </div>
    </footer>
    <script></script>
</body>
</html>