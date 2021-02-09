<?php 
function getHeader() { 
    session_start();   
    $_SESSION['name'] = $_POST['name']??0;
    if(isset($_POST["browser"])) {
        $_SESSION["navigateur"] = $_POST["browser"]??"Chrome";
    }

    if(isset($_POST["socialmedia"]) and !empty($_POST["socialmedia"])) {
        $_SESSION["socialNetworks"] = $_POST["socialmedia"];
    }
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page de test de session</title>
    </head>
    <body>

<?php }
function getFooter() { ?>
    </body>
    </html>
<?php } ?>