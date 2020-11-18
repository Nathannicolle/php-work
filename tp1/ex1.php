<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercice 1</title>
</head>
<body>
  <a href="/tp1/ex1.php?page=1">Afficher page <br></a>
  <a href="/tp1/ex1.php?page=2">Afficher page <br></a>
  <a href="/tp1/ex1.php?page=3">Afficher page <br></a>
  <?php
    echo "Vous êtes sur la page n°" .($_GET["page"]??1);
  ?>
</body>
</html>
