<?php
    $instituciones = array(
        array("Elizabeth Garret", "Jardín De Niños", "Emiliano Zapata 56, Santa Anita, 54435 Cdad. Nicolás Romero, Méx.", "Certificado", "10", "2 años"),
        array("Venustiano Carranza", "Escuela Primaria", "Emiliano Zapata 74, Himno Nacional, 54435 Cdad. Nicolás Romero, Méx.", "Certificado", "9.5", "6 años"),
        array("Matilde Montoya Lafragua", "Escuela Secundaria Tecnica", "Lago Texcoco Manzana 1, lote 1, Cumbres del sol, 54416 Cdad. Nicolás Romero, Méx.", "Certificado", "9.8", "3 años"),
        array("Preparatoria Oficial No. 87", "Escuela Preparatoria", "Blvd. Ignacio Zaragoza S/N, Hogares de Atizapan, 52910 Cdad. López Mateos, Méx.", "Certificado", "7", "3 años")
    );
    foreach ($instituciones as $institucion) {
        echo "<table>";
        echo "<tr id='tt'><th colspan='6'>$institucion[0]</th></tr>";
        echo "<tr><th>Institución</th><th>Tipo</th><th>Dirección</th><th>Reconocimiento</th><th>Promedio</th><th>Duración</th></tr>";
        echo "<tr>";
        foreach ($institucion as $dato) {
            echo "<td>$dato</td>";
        }
        echo "</tr>";
        echo "</table>";
    }
?>