<?php
include("common/header.php");
?>
<h1>Trouver le nombre choisi par l'ordinateur</h1>
<h1>Entre O et 100</h1>

<div>
    <form action="#" method="GET">
        <input type="text" value="yes" name="reset" id="reset" hidden>
        <input type="submit" value="Reinit">
    </form>
    <form action="#" method="GET">
        <label for="nombre">Proposer un nombre</label>
        <input type="number" id="nombre" name="nombre">
        <input type="submit" value="Valider le nombre">
    </form>
    <?php
    session_start();
    if (isset($_GET['reset']) && $_GET['reset'] = 'yes') {

        // Mise en Session de la valeur a trouver
        $_SESSION['$nombreAtrouver'] = rand(0, 100);
        // Affichage du nombre a trouver pour le debug si besoin
        // echo $_SESSION['$nombreAtrouver'];
    }
    if (isset($_GET['nombre']) && is_numeric($_GET["nombre"]) && isset($_SESSION['$nombreAtrouver'])) {

        $nombreAtrouver = $_SESSION['$nombreAtrouver'];
        // Je change le format de la donnée reçue de text en entier pour la comparaison
        $nombre = (int) $_GET['nombre'];
        // Conditions pour afficher plus ou moins ou nombre trouvé
        if ($nombre > $nombreAtrouver) {
            echo "C'est moins que : " . $nombre;
        } elseif ($nombre === $nombreAtrouver) {
            echo "<h2>Bravo c'est le bon nombre : " . $nombreAtrouver . "</h2>";
        } else {
            echo "C'est plus que : " . $nombre;
        }
        // echo "Le nombre proposé : " . $nombre;
    }
    // Vérification si un nombre a trouvé existe bien en session
    elseif (!isset($_SESSION['$nombreAtrouver'])) {
        echo "cliquer reinit";
    }


    ?>
</div>

<?php
include("common/footer.php");
?>