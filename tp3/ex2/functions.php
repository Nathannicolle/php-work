<?php 
function getHeader() { 
    session_start();
    setcookie('name', $_POST['name']??0, time() + 300, null, null, false, true);
    if(isset($_COOKIE['name']) && !empty($_POST['memorize'])) {
        $_SESSION['name'] = $_COOKIE['name'];
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