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
        <form method="post">
            <label for="chaine">Entrez votre texte :</label>
            <textarea name="chaine" rows="2"></textarea>
            <select name="select">
                <option value="nbword">Nombre de mots</option>
                <option value="nbcarac">Nombre de caractères</option>
            </select>
            <label for="carac">Caractère ?</label>
            <input type="text" name="carac">
            <input type="submit" value="compter" id="compter">
        </form>
        <h1>Résultat</h1>
        <p><?php  
            switch ($_POST['select']) {
                case 'nbword' :
                    wordCount();
                break;
                case 'nbcarac' :
                    charCount();
                break;
            }
        ?>
        </p>
    </body>
</html>