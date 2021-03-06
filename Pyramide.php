<?php
include("common/header.php");
?>

<h1>Affichage d'une pyramide</h1>
<div>
    <form action="#" method="GET">
        <label for="hauteur">Hauteur de la pyramide</label>
        <input type="number" name="hauteur" id="hauteur">
        <input type="submit" value="Valider">
    </form>
    <?php
    if (isset($_GET['hauteur']) && $_GET['hauteur'] >= 0 && is_numeric($_GET["hauteur"])) {
        $hauteur = $_GET['hauteur'];
        echo "Pour une hauteur de : $hauteur *" . "<br> <br>";
        $compteur = $hauteur;
        //Monté d'étoiles
        for ($i = 0; $i <= $hauteur - 1; $i++) {
            AfficheEtoile($i);
        }
        //descente d'étoiles
        for ($i = $hauteur - 2; $i >= 0; $i--) {
            $d = abs($i);
            AfficheEtoile($d);
        }
    } else {
        echo "<h2>Entrez un nombre d'étoile(s) SVP (un entier positif)</h2>";
    }

    // LES FONCTION(S)
    function AfficheEtoile($nbreEtoile)
    {
        for ($i = 0; $i <= $nbreEtoile; $i++) {
            echo "*";
        }
        echo "<br>";
    }

    ?>
</div>
<?php
include("common/footer.php");
?>