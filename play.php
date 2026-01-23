<?php
if (!isset($_GET['system'], $_GET['rom'])) {
    die("Juego no especificado");
}

$system = preg_replace('/[^a-z0-9_]/i', '', $_GET['system']);
$rom = basename(urldecode($_GET['rom']));

$romPath = "roms/$system/$rom";



?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>System Beware Retro — Play</title>

<style>
html, body {
    margin: 0;
    width: 100%;
    height: 100%;
    background: black;
    overflow: hidden;
}
#display {
    width: 100%;
    height: 100%;
}
#game {
    width: 100%;
    height: 100%;
}
</style>
</head>

<body>

<div id="display">
    <div id="game"></div>
</div>

<script>
/* CONFIGURACIÓN EXACTA COMO EL PROYECTO QUE FUNCIONA */

window.EJS_player = "#game";
window.EJS_gameName = "<?= pathinfo($rom, PATHINFO_FILENAME) ?>";
window.EJS_gameUrl = "<?= $romPath ?>";
window.EJS_core = "<?= $system ?>";

/* ESTA ES LA CLAVE */
window.EJS_pathtodata = "data/";
window.EJS_startOnLoaded = true;

/* CARGA CORRECTA */
const script = document.createElement("script");
script.src = "data/loader.js";
document.body.appendChild(script);
</script>

</body>
</html>
<?php
/* =========================
   JUEGOS N64 + CARÁTULAS
========================= */
$games = [
    ["system"=>"n64","rom"=>"perfect_dark.n64","name"=>"Perfect Dark","img"=>"covers/n64/0_perfect_dark_n64_palmasoft_eur.jpg"],
    ["system"=>"n64","rom"=>"mario_kart_64.n64","name"=>"Mario Kart 64","img"=>"covers/n64/1_Mario-Kart-64-EU.jpg"],
    ["system"=>"n64","rom"=>"goldeneye_007.n64","name"=>"GoldenEye 007","img"=>"covers/n64/007.jpg"],
    ["system"=>"n64","rom"=>"banjo_kazooie.n64","name"=>"Banjo-Kazooie","img"=>"covers/n64/Banjo-Kazooie-N64-EU.jpg"],
    ["system"=>"n64","rom"=>"donkey_kong_64.n64","name"=>"Donkey Kong 64","img"=>"covers/n64/Donkey Kong 64.jpg"],
    ["system"=>"n64","rom"=>"star_fox_64.n64","name"=>"Star Fox 64","img"=>"covers/n64/Star-Fox-64.jpg"],
    ["system"=>"n64","rom"=>"super_smash_bros.n64","name"=>"Super Smash Bros","img"=>"covers/n64/super_smash_bros.webp"],
    ["system"=>"n64","rom"=>"super_mario_64.n64","name"=>"Super Mario 64","img"=>"covers/n64/Super-Mario-64-EU.jpg"],
    ["system"=>"n64","rom"=>"zelda_majoras_mask.n64","name"=>"Zelda: Majora's Mask","img"=>"covers/n64/the-legend-of-zelda-majoras-mask.jpg"],
    ["system"=>"n64","rom"=>"zelda_ocarina_of_time.n64","name"=>"Zelda: Ocarina of Time","img"=>"covers/n64/The-Legend-of-Zelda-Ocarina-of-Time.jpg"]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Pixel Spooky Arcade</title>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
<h1>PIXEL NIGHTMARE</h1>
<div>
<?php foreach($games as $g): ?>
<a href="play.php?system=<?=$g['system']?>&rom=<?=$g['rom']?>">
<img src="<?=$g['img']?>" width="160"><br>
<?=$g['name']?>
</a>
<?php endforeach; ?>
</div>
</body>
</html>
