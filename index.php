<?php
session_start();

/* =========================
   TODO TU PHP ORIGINAL
   (login, register, ajax,
    favoritos, queries,
    loops, etc)
========================= */
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Arcade</title>

<!-- =========================
     ESTÉTICA PIXEL SPOOKY
     (NO TOCA LÓGICA)
========================= -->

<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

<style>
/* === RESET SEGURO === */
*{
    image-rendering: pixelated;
}

/* === BASE === */
body{
    background:#050505 !important;
    color:#eaeaea !important;
    font-family:'Press Start 2P', monospace !important;
}

/* === LINKS (NO ROMPE href) === */
a{
    color:#c00000;
    text-decoration:none;
}

a:hover{
    color:#ff4444;
}

/* === CONTENEDORES === */
div, section, main{
    background-color: transparent;
}

/* === JUEGOS (SIN CLASES ESPECÍFICAS) === */
a[href*="play.php"]{
    display:block;
    background:#0f0f0f;
    border:3px solid #300;
    box-shadow:4px 4px 0 #400;
    padding:10px;
    transition:.12s;
}

a[href*="play.php"]:hover{
    background:#180000;
    transform:translate(2px,2px);
    box-shadow:2px 2px 0 #400;
}

/* === IMÁGENES === */
img{
    background:#000;
    border:2px solid #400;
}

/* === TEXTO === */
p, span, small, label{
    color:#ddd;
}

/* === INPUTS / LOGIN === */
input, select, button{
    background:#000;
    color:#fff;
    border:2px solid #400;
    font-family:'Press Start 2P', monospace;
}

button:hover{
    background:#200000;
}

/* === TABLAS / LISTAS === */
table, tr, td{
    border-color:#400;
    color:#eee;
}

/* === SANGRE PIXEL (DECORACIÓN SEGURA) === */
body::after{
    content:"";
    position:fixed;
    bottom:10px;
    left:10px;
    width:160px;
    height:60px;
    background:
        radial-gradient(circle at 20% 50%, #700 30%, transparent 31%),
        radial-gradient(circle at 45% 40%, #900 35%, transparent 36%),
        radial-gradient(circle at 70% 55%, #600 30%, transparent 31%),
        radial-gradient(circle at 90% 45%, #800 35%, transparent 36%);
    pointer-events:none;
    opacity:.85;
    z-index:1;
}
</style>

</head>

<body>

<!-- =========================
     AQUÍ SIGUE TU HTML + PHP
     EXACTAMENTE IGUAL
========================= -->

<?php
/* TODO TU HTML DINÁMICO ORIGINAL */
?>

</body>
</html>
