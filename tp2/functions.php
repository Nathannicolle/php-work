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

function parseElement($elms) {
    foreach($elms as $index=>$element) {
        if($index % 3 == 0) {
            $niveau = 1;
        } else {
            $niveau = $element["level"];
        }
        ?>
        <?= "<h$niveau>" . $element['titre'] . "</h$niveau>"  ?>
        <?= "<div>". $element['contenu'] ."</div>"?>
    <?php } ?>
<?php }

$elms=[
    ["titre"=>"Exercices","contenu"=>"Liste des exercices disponibles"],
    ["titre"=>"Exercice n°1","contenu"=>"Créer une fonction","level"=>2],
    ["titre"=>"Exercice n°2","contenu"=>"Afficher le contenu d'un tableau","level"=>2]
];

function wordCount() {
    if(isset($_POST['chaine'])) {
        if(!empty($_POST['chaine'])) {
            $s = $_POST['chaine'];
            echo str_word_count($s);
        }
    }
}

function charCount() {
    if(isset($_POST['carac'])) {
        if(!empty($_POST['carac'])) {
            $carac = $_POST['carac'];
            $s = $_POST['chaine'];
            $carac_count = mb_substr_count($s, $carac);
            echo $carac_count;
        } else {
            $s = $_POST['chaine']??0;
            $carac_count = strlen($s);
            echo $carac_count;
        }
    }
}