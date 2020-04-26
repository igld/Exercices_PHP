<?php

require_once("Class/Personnage.php");

include("common/header.php");
include("common/menu.php");


?>


<h1> Personnage : </h1>

<?php
// creation personnage grace au constructor
$p1 = new Personnage("Luke", "player.png", 27, Personnage::HOMME, Personnage::FORCE_MAX, 4);
// Affichage des informations et image du personnage p1
$p1->afficherInfosTemplate();

echo "-------------------------------------------------------<br/>";

// un nouveau personnage p2
$p2 = new Personnage("Katy", "playerF.png", 22, Personnage::FEMME, Personnage::FORCE_MED, 6);
// Affichage des informations et image du personnage p2
$p2->afficherInfosTemplate();

echo "-------------------------------------------------------<br/>";

// un nouveau personnage p3
$p3 = new Personnage("Marc", "playerM.png", 33, Personnage::HOMME, Personnage::FORCE_MIN, 2);
//utilisation du getter
echo "le nom avant la modification est-il marc ? oui c'est bien : " . $p3->getNom() . ".";
//echo $p3->getAge();
// ici on change le nom
//$p3->nom = "Titi"; // pas ok si attribut est en private
$p3->setNom("Titi");

$p3->afficherInfosTemplate();

echo "-------------------------------------------------------<br/>";

?>


<?php
include("common/footer.php");
?>
