<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/TA.css">
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
                <li><a href="#">Trayectoria</a></li>
                <li><a href="./TrayectoriaEscom.php">Trayectoria Escom</a></li>
                <li><a href="./HYH.php">Hobbies y Habilidades</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Trayectoria Academica</h2>
            <?php include("./php/trayectoriaacademica.php"); ?>
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