<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ex.2 php</title>
  <style type="text/css">
    body
    {
      font-family: arial;
    }

    form
    {
      display: flex;
      flex-direction: column;
      width: 50%;
    }
  </style>
</head>
<body>
<form method="GET">
    <label for="message">Message :</label>
    <input type="text" name="message" id="message">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <label for="color">Color :</label>
    <input type="color" name="color" id="color">
    <input type="submit" value="Valider">
</form>
<?php
$message = $_GET["message"]??'Entrez un message';
$size = $_GET["size"]??12;
$color = $_GET["color"]??'black';
?>
<p style="font-size: <?php echo $size; ?>px; color: <?php echo $color; ?>">
<?php
  echo $message;
?></p>
</body>
</html>
