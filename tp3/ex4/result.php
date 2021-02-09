<?php
    include_once("functions.php");
    get_header();
    $nomreseau = $_SESSION["socialNetworks"]??[];
    foreach($nomreseau as $network) {
        echo $network . "<br/>";
    }