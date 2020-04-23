<?php

include("common/header.php");
include("common/menu.php");

$p1 = [
    "Nom" => "Luke",
    "Img" => "player.png",
    "Age" => 27,
    "Sexe" => "Homme",
    "Force" => 5,
    "Agilite" => 4
];
// $p2 = [
//     "Nom" => "Katy",
//     "Age" => 22,
//     "Sexe" => "Femme",
//     "Force" => 3,
//     "Agilite" => 6
// ];
// $p3 = [
//     "Nom" => "Marc",
//     "Age" => 33,
//     "Sexe" => "Homme",
//     "Force" => 7,
//     "Agilite" => 2
// ];

?>


<h1> Personnage : </h1>
<?php

echo "<div class='gauche'>";
echo "<img src = 'sources/images/" . $p1['Img'] . "' alt = 'player " . $p1['Nom'] . "' />";
echo "</div>";
echo "<div class='gauche'>";
afficherPerso($p1);
echo "</div>";


function afficherPerso($personnage)
{
    foreach ($personnage as $index => $value) {
        echo "<b>" . $index . "</b> : " . $value . "<br/>";
    }
}

?>
<?php
include("common/footer.php");
?>
