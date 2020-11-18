<?php
include "header.php";

$nblignes = $_GET['line']??2;
$nbcolonnes = $_GET['colonne']??5;
$countlines = 0;
$countcolums = 0;

?>

<a href="?line=2&colonne=2">Tableau 2x2</a>
<a href="?line=5&colonne=5">Tableau 5x5</a>
<a href="?line=10&colonne=8">Tableau 10x8</a>

<table border="1">

    <?php
    for ($i = 0; $i < $nblignes; $i++) {
        $countlines = $countlines + 1;
        $countcolums = 0;
    ?>

        <tr>
            <?php
            for ($o = 0; $o < $nbcolonnes; $o++) {
                $countcolums = $countcolums + 1;
            ?>
                <td>

                    <?php
                    echo $countlines . '-' . $countcolums;
                    ?>

                </td>

            <?php
            }
            ?>

        </tr>
    <?php
    }
    ?>
</table>
<?php
include "footer.php";
?>