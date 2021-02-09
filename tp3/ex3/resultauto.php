<?php
include_once("functions.php");
get_header();
echo $_SESSION["navigateur"]??0;
echo "<br>";
var_dump($_SESSION);