<?php
    function get_header() {
        session_start();
        if(isset($_POST["browser"])) {
            $_SESSION["navigateur"] = $_POST["browser"]??"Chrome";
        }
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page test session - navigateur</title>
        <style>
            body {
                font-family: sans-serif;
            }

            form {
                font-size:1.5em;
            }

            input {
                font-size:0.8em;
            }
        </style>
    </head>
    <body>
<?php
    }

    function get_footer() {
?>
    </body>
    </html>
<?php
    }
?>