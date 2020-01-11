<?php
include("common/header.php");

$p1 = [
    "Img" => "player.png",
    "Nom" => "Luke",
    "Age" => 27,
    "Sexe" => "Homme",
    "Force" => 5,
    "Agilite" => 4
];
$p2 = [
    "Img" => "playerF.png",
    "Nom" => "Katy",
    "Age" => 22,
    "Sexe" => "Femme",
    "Force" => 3,
    "Agilite" => 6
];
$p3 = [
    "Img" => "playerM.png",
    "Nom" => "Marc",
    "Age" => 33,
    "Sexe" => "Homme",
    "Force" => 7,
    "Agilite" => 2
];

$tableauAsso = [
    $p1, $p2, $p3,
];
?>

<h1>Personnages</h1>

<?php
// var_dump($tableauAsso);

foreach ($tableauAsso as $tableau) {
    foreach ($tableau as $index => $value) {
        if ($index === "Img") {
            echo "<img src = 'sources/images/$value' alt = 'player image' />";
        } else {
            echo "<b>" . $index . "</b> : " . $value . "<br/>";
        }
    }
    echo "<br/><br/>";
}

?>
<?php
include("common/footer.php");
?>