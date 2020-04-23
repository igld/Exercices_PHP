<?php

require_once("Class/Personnage.php");

include("common/header.php");
include ("common/menu.php");



?>


<h1> Personnage : </h1>

<?php
// creation personnage grace au constructor
$p1 = new Personnage("Luke", "player.png", 27, true, 5, 4);
// Affichage des informations et image du personnage p1
$p1->afficherInfosTemplate();

echo "-------------------------------------------------------<br/>";

// un nouveau personnage p2
$p2 = new Personnage("Katy", "playerF.png", 22, false, 3, 6);
// Affichage des informations et image du personnage p2
$p2->afficherInfosTemplate();

echo "-------------------------------------------------------<br/>";

// un nouveau personnage p3
$p3 = new Personnage("Marc", "playerM.png", 33, true, 7, 2);
$p3->afficherInfosTemplate();

echo "-------------------------------------------------------<br/>";

?>


<?php
include("common/footer.php");
?>
