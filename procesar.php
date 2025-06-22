<?php
$chistes = [
  "Ulises" => "¿Por qué el programador fue al médico? Porque tenía un bug en el estómago.",
  "Marco" => "¿Cómo se despiden los programadores? ¡Hasta el byte!",
  "Ricardo" => "¿Qué le dice un bit a otro? Nos vemos en el bus de datos."
];

$nombre = $_POST['integrante'] ?? null;

if ($nombre && isset($chistes[$nombre])) {
  $chiste = $chistes[$nombre];
  echo "<h1>Chiste de $nombre:</h1>";
  echo "<p>$chiste</p>";
} else {
  echo "<p>No se encontró el integrante o el chiste.</p>";
}
echo '<br><a href="index.php">Volver</a>';
?>
