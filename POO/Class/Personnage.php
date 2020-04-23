<?php
class Personnage
{
public string $nom;
public string $img;
public int $age;
public bool $sexe;
public int $force;
public int $agilite;

//Constructor
public function __construct($nom2,$img,$age,$sexe,$force,$agilite)
{
$this->nom = $nom2;
$this->img = $img;
$this->age = $age;
$this->sexe = $sexe;
$this->force = $force;
$this->agilite = $agilite;
}

// ajouter la fonction affichage des informations du personnage

public function afficherInfos()
{
echo '<b>Nom : </b> ' . $this->nom . '</br>';
echo '<b>Age : </b> ' . $this->age . '</br>';
echo '<b>Sexe : </b> ';
if ($this->sexe) {
echo 'Homme</br>';
} else {
echo 'Femme</br>';
}
echo '<b>Force : </b> ' . $this->force . '</br>';
echo '<b>Agilité : </b> ' . $this->agilite . '</br>';

}
// Affichage image et infos perso
public function afficherInfosTemplate()
{
echo "<div class='gauche'>";
    echo "<img src = 'sources/images/" . $this->img . "' alt = 'player " . $this->nom . "' />";
    echo "</div>";
echo "<div class='gauche'>";
    $this->afficherInfos();
    echo "</div>";
}

}
?>
