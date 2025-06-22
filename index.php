<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Chistes del Equipo Intelcode</title>
</head>
<body>
  <h1>Selecciona un integrante:</h1>
  <form action="procesar.php" method="post">
    <label for="integrante">Integrante:</label>
    <select name="integrante" id="integrante">
      <option value="Ulises">Ulises</option>
      <option value="Marco">Marco</option>
      <option value="Ricardo">Ricardo</option>
    </select>
    <button type="submit">Ver chiste</button>
  </form>

  <br><a href="lista.php">Ver todos los chistes</a>
</body>
</html>
