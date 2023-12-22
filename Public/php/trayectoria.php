<?php
$semesters = array(
    "Octavo Semestre" => array(
        array("nombre" => "Desarollo de Habilidades Sociales Para La Alta Dirección", "estado" => "nottaken"),
        array("nombre" => "Trabajo Terminal II", "estado" => "nottaken"),
        array("nombre" => "Estancia Profesional", "estado" => "nottaken"),
        array("nombre" => "Liderazgo Personal", "estado" => "nottaken"),
        array("nombre" => "Gestión Empresarial", "estado" => "nottaken")
    ),
    "Septimo Semestre" => array(
        array("nombre" => "Administración de Servicios de Red", "estado" => "nottaken"),
        array("nombre" => "Sistemas Distribuidos", "estado" => "nottaken"),
        array("nombre" => "Trabajo terminal I", "estado" => "nottaken"),
        array("nombre" => "Optativa B2", "estado" => "nottaken"),
        array("nombre" => "Optativa A2", "estado" => "nottaken"),
        array("nombre" => "Desarollo De Aplicaciones Moviles Nativas", "estado" => "nottaken")
    ),
    "Sexto Semestre" => array(
        array("nombre" => "Aplicaciones para Comunicaciones en Red", "estado" => "nottaken"),
        array("nombre" => "Inteligencia Artificial", "estado" => "nottaken"),
        array("nombre" => "Ingeniería de Software", "estado" => "nottaken"),
        array("nombre" => "Métodos Cuantitativos para la Toma de Decisiones", "estado" => "nottaken"),
        array("nombre" => "Optativa B1", "estado" => "nottaken"),
        array("nombre" => "Optativa A1", "estado" => "nottaken"),
        array("nombre" => "Sistemas En Chip", "estado" => "nottaken")
    ),
    "Quinto Semestre" => array(
        array("nombre" => "Procesamiento Digital De Señales", "estado" => "nottaken"),
        array("nombre" => "Instrumentación y Control", "estado" => "nottaken"),
        array("nombre" => "Arquitectura de Computadoras", "estado" => "nottaken"),
        array("nombre" => "Análisis y Diseño de Sistemas", "estado" => "nottaken"),
        array("nombre" => "Compiladores", "estado" => "nottaken"),
        array("nombre" => "Formulación y Evaluación de Proyectos Informaticos", "estado" => "studyng"),
        array("nombre" => "Redes de Computadoras", "estado" => "nottaken")
    ),
    "Cuarto Semestre" => array(
        array("nombre" => "Probabilidad y Estadistica", "estado" => "nottaken"),
        array("nombre" => "Matemáticas Avanzadas para la Ingeniería", "estado" => "nottaken"),
        array("nombre" => "Electrónica analógica", "estado" => "studyng"),
        array("nombre" => "Diseño de Sistemas Digitales", "estado" => "taken"),
        array("nombre" => "Tecnologías Para El Desarollo De Aplicaciones Web", "estado" => "studyng"),
        array("nombre" => "Sistemas Operativos", "estado" => "taken"),
        array("nombre" => "Teoría computacional", "estado" => "taken")
    ),
    "Tercer Semestre" => array(
        array("nombre" => "Análisis y Diseño De Algoritmos", "estado" => "taken"),
        array("nombre" => "Paradigmas de programación", "estado" => "taken"),
        array("nombre" => "Finanzas Empresariales", "estado" => "taken"),
        array("nombre" => "Bases de datos", "estado" => "taken"),
        array("nombre" => "Fundamentos de Diseño Digital", "estado" => "taken"),
        array("nombre" => "Circuitos Electricos", "estado" => "taken"),
        array("nombre" => "Ecuaciones Diferenciales", "estado" => "studyng")
    ),
    "Segundo Semestre" => array(
        array("nombre" => "Algoritmos y Estructuras de Datos", "estado" => "taken"),
        array("nombre" => "Fundamentos economicos", "estado" => "taken"),
        array("nombre" => "Ingeniería Ética y sociedad", "estado" => "taken"),
        array("nombre" => "Mecánica y Electromagnetismo", "estado" => "taken"),
        array("nombre" => "Cálculo Aplicado", "estado" => "taken"),
        array("nombre" => "Álgebra Lineal", "estado" => "taken")
    ),
    "Primer Semestre" => array(
        array("nombre" => "Fundamentos de Programación", "estado" => "taken"),
        array("nombre" => "Comunicación Oral y Escrita", "estado" => "taken"),
        array("nombre" => "Matemáticas Discretas", "estado" => "taken"),
        array("nombre" => "Análisis Vectorial", "estado" => "taken"),
        array("nombre" => "Cálculo", "estado" => "taken")
    )
);

function generarHTML($semesters){
    foreach ($semesters as $semester => $subjects) {
        echo '<div class="halfyear">';
        echo '<h3>' . $semester . '</h3>';
        echo '<div class="subjects">';
        foreach ($subjects as $subject) {
            echo '<div class="' . $subject['estado'] . '"><p>' . $subject['nombre'] . '</p></div>';
        }
        echo '</div>';
        echo '</div>';
    }
}
?>