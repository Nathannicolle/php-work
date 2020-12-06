<?php 
function getHeader() { 
    session_start();
    if(isset($_COOKIE['name'])) {
        header('Location: recoAuto.php');
    }
    
    if(isset($_POST['memorize']) and !empty($_POST['memorize'])) {
        $_SESSION['name'] = setcookie('name', $_POST['name'], time() + 300, null, null, false, true);
        header('Location: recoAuto.php');
    } else {
        $_SESSION['name'] = $_POST['name']??0;
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