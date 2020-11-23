<!DOCTYPE html>
<html lang='fr'>
    <head>
        <title>Exercice 7 - Compte caractères/mots</title>
        <meta charset='utf-8'>
        <link type="text/css" rel="stylesheet" href="style_ex7.css">
    </head>
    <body>
        <?php 
            include("functions.php");
        ?>
        <div class="content">
            <form method="post">
                <label for="chaine">Entrez votre texte :</label>
                <textarea name="chaine" rows="2"></textarea>
                <select name="select">
                    <option value="nbword">Nombre de mots</option>
                    <option value="nbcarac">Nombre de caractères</option>
                </select>
                <label for="carac">Caractère à compter :</label>
                <input type="text" name="carac">
                <input type="submit" value="compter" id="compter">
            </form>
            <div class="result">
                <h1>Résultat</h1>
                <p><?php  
                    switch ($_POST['select']) {
                        case 'nbword' :
                            echo "Nombre de mots :<br>";
                            wordCount();
                        break;
                        case 'nbcarac' :
                            echo "Nombre de caractères :<br>";
                            charCount();
                        break;
                    }
                ?>
                </p>
            </div>
        </div>
    </body>
</html>