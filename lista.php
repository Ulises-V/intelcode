<?php
$chistes = [
  "Ulises" => "¿Por qué el programador fue al médico? Porque tenía un bug en el estómago.",
  "Marco" => "¿Cómo se despiden los programadores? ¡Hasta el byte!",
  "Ricardo" => "¿Qué le dice un bit a otro? Nos vemos en el bus de datos."
];

echo "<h1>Lista de chistes del equipo Intelcode</h1><dl>";
foreach ($chistes as $nombre => $chiste) {
  echo "<dt><strong>$nombre</strong></dt><dd>$chiste</dd>";
}
echo "</dl>";
echo '<br><a href="index.php">Volver al formulario</a>';
?>
