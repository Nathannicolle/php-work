<?php
include_once("functions.php");
getHeader();
?>
<form method="post" action="<?= $action ?>">
    <label for="name">Nom :<br></label>
    <input type="text" name="name" id="name" required="true">
    <input type="checkbox" name="memorize" id="memorize">
    <label for="memorize">Mémoriser ma connexion</label>
    <input type="submit" name="valider" value="Valider" id="valider">
</form>
<?php
getFooter();