<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? "TD2" ?></title>
    <link rel="stylesheet" type="text/css" href="style_ex5.css">
</head>

<body>
    <?php
    include("functions.php");
    ?>
    <div class="container">
        <form method="post" id="form">
            <label for="input_lines">Lignes :</label>
            <input type="number" name="input_lines" id="input_lines">
            <label for="input_colums">Colonnes :</label>
            <input type="number" name="input_colums" id="input_colums">
            <input type="submit" value="Créer le tableau" id="createhtmltable">
        </form>
        <?php
        $nblignes = $_POST['input_lines']??2;
        $nbcolonnes = $_POST['input_colums']??5;
        echo createHtmlTable($nblignes, $nbcolonnes);
        echo element("titre","test",1);
        ?>
    </div>
</body>

</html>