<?php
include_once("functions.php");
getHeader();
    echo $_SESSION['name'] . "<br>";
    var_dump($_SESSION);
    echo $_COOKIE['name']??0 . "<br>";
    var_dump($_COOKIE);
getFooter();