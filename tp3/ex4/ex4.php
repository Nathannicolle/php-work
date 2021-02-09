<?php 
    include_once("functions.php");
?>
<h1>Question 2 :</h1>
<form method="POST" action="result.php">
    <label>Quels réseaux sociaux utilisez vous régulièrement ?</label>
    <input type="checkbox" name="socialmedia[]" id="Facebook" value="Facebook"/><label for="Facebook">Facebook</label>
    <input type="checkbox" name="socialmedia[]" id="Twitter" value="Twitter"/><label for="Twitter">Twitter</label>
    <input type="checkbox" name="socialmedia[]" id="Instagram" value="Instagram"/><label for="Instagram">Instagram</label>
    <input type="checkbox" name="socialmedia[]" id="Linkedin" value="Linkedin"/><label for="Linkedin">Linkedin</label>
    <input type="checkbox" name="socialmedia[]" id="aucun" value="aucun" /><label for="aucun">Aucun<br/></label>
    <input type="submit" name="valider" value="Valider" id="valider">
</form>