<?php 
function getHeader() { 
    if(isset($_POST['memorize']) and !empty($_POST['memorize'])) {
        $action = "recoAuto.php";
        setcookie('name', $_POST['name'], time() + 300, null, null, false, true);
        
    } else {
        $action = "resultex2.php";
        session_start();
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