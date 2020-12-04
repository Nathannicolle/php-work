<?php 
function getHeader() { 
    $startSession = session_start();
    $_SESSION['name'] = $_POST['name']??0;
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