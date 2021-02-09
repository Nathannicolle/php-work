<?php 
    include_once("functions.php");
    get_header();
?>
<h1>Question 1 :</h1>
<form method="POST" action="resultauto.php">
    <label for="browser">Quel est votre navigateur favori :<br/></label>
    <input type="radio" name="browser" id="b1" value="Chrome" checked/><label for="b1">Chrome</label>
    <input type="radio" name="browser" id="b2" value="Firefox" /><label for="b2">Firefox</label>
    <input type="radio" name="browser" id="b3" value="IE"/><label for="b3">IE</label>
    <input type="radio" name="browser" id="b4" value="Opera"/><label for="b4">Opera</label>
    <input type="radio" name="browser" id="b5" value="Autre"/><label for="b5">Autre<br></label>
    <input type="submit" name="valider" value="Valider" id="valider">
</form>
<?php
    get_footer();
?>