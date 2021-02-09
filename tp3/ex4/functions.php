<?php
function get_header() {
    session_start();
    if(isset($_POST["socialmedia"]) and !empty($_POST["socialmedia"])) {
        $_SESSION["socialNetworks"] = $_POST["socialmedia"];
    }
?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page test session - réseaux sociaux</title>
    </head>
    <body>
<?php 
}

function get_footer() {
?>
</body>
</html>
<?php } ?>