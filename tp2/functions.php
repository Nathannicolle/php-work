<?php
function createHtmlTable($nblignes, $nbcolonnes)
{
    $nblignes = $_POST['input_lines']??2;
    $nbcolonnes = $_POST['input_colums']??5;
    $countlines = 0;
    $countcolums = 0;
    echo "<table border='1'>";

    for ($i = 0; $i < $nblignes; $i++) {
        $countlines = $countlines + 1;
        $countcolums = 0;

        echo "<tr>";

        for ($o = 0; $o < $nbcolonnes; $o++) {
            $countcolums = $countcolums + 1;

            echo "<td>";

            echo $countlines . '-' . $countcolums;

            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

function element($titre, $contenu, $niveau=1)
{
    $titre = "titre";
    $contenu = "contenu";
    echo "<h-$niveau>$titre</h-$niveau>";
    echo "<div>";
    echo "$contenu";
    echo "</div>";
}
