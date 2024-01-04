<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/hyh.css">
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
                <li><a href="./Ta.php">Trayectoria</a></li>
                <li><a href="./TrayectoriaEscom.php">Trayectoria Escom</a></li>
                <li><a href="#">Hobbies y Habilidades</a></li>
            </ul>

        </nav>
    </header>
    <main>
        <section>
            <article class="table">
                <h3>Habilidades</h3>
                <table id="tablecsv">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </article>
            <article>
                <h3>Hobbies</h3>
                <div class="hb">
                    <div class="containerhyh">
                        <p>Videojuegos</p>
                        <a href="https://steamcommunity.com/id/langxz" target="_blank">
                            <img src="../Sources/videojuegos.jpg" alt="videojuegos">
                        </a>
                    </div>
                    <div class="containerhyh">
                        <p>programar</p>
                        <a href="https://github.com/miguets/" target="_blank">
                            <img src="../Sources/github_logo.png" alt="videojuegos">
                        </a>
                    </div>
                    <div class="containerhyh">
                        <p>Musica</p>
                        <a href="https://open.spotify.com/user/t15fdjsanxmhpepeof5t76ltt" target="_blank">
                            <img src="../Sources/musica.avif" alt="videojuegos">
                        </a>
                    </div>
                    <div class="containerhyh">
                        <p>programación competitiva</p>
                        <a href="https://codeforces.com/profile/Miguets" target="_blank">
                            <img src="../Sources/codeforces.503f883f-8339-4dc5-8609-81713a59281f" alt="videojuegos">
                        </a>
                    </div>
                </div>
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
    <script>
        const table = document.querySelector('table');
        const thead = table.querySelector('thead tr');
        const tbody = table.querySelector('tbody');
        fetch('datos.csv')
            .then(response => response.text())
            .then(csvData => {
                const rows = csvData.split('\n');
                rows.forEach((row, rowIndex) => {
                    const columns = row.split(';');
                    const currentRow = rowIndex === 0 ? thead : document.createElement('tr');
                    columns.forEach((column, columnIndex) => {
                        const cellElement = rowIndex === 0 ? document.createElement('th') : document.createElement('td');
                        cellElement.textContent = column;
                        currentRow.appendChild(cellElement);
                    });
                    if (rowIndex !== 0) {
                        tbody.appendChild(currentRow);
                    }
                });
            })
            .catch(error => console.error('No se encuentra el archivo csv: ', error));
    </script>
</body>
</html>