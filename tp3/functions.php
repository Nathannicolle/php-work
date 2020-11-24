<?php 
function getHeader($startSession,$title) { 
    $startSession = session_start();
        $title = "Ouverture de session";
        if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
        } else {
            $_SESSION['count']++;
        } ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page de test de cookies</title>
    </head>
<?php }
function getFooter() { ?>
    </html>
<?php } ?>