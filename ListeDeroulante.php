<?php

include("common/header.php");
?>

<h1>Liste Déroulante Sélection du personnage avec caractéristiques</h1>
<div>
    <form method="get" action="#">
        <label for="choix">Personnage : </label>
        <select name="choix" id="choix">
            <option value="choix" <?php if (!isset($_GET['choix']))  echo "selected";
                                    else echo "disabled"; ?>>Choisir ici</option>
            <option value="femme" <?php if (isset($_GET['choix']) && $_GET['choix'] === 'femme')  echo "selected"; ?>>Femme</option>
            <option value="homme" <?php if (isset($_GET['choix']) && $_GET['choix'] === 'homme')  echo "selected"; ?>>Homme</option>
        </select>
        <input type="submit" value="Valider" />
    </form>
    <br>
    <?php
    // Récupération et validation de la donnée nombreNotes
    // if (isset($_GET['choix'])) {
    // echo $_GET['choix'];
    $tabFemme = array(
        'nom' => 'Tata',
        'prenom' => 'Yoyo',
        'age' => 35,
    );
    $tabHomme = [
        'nom' => 'Dupont',
        'prenom' => 'Alfred',
        'age' => 45,
    ];
    if (isset($_GET['choix']) && $_GET['choix'] === 'femme') {
        echo '<img src="sources/images/playerF.png" alt="Femme">';
        foreach ($tabFemme as $key => $value) {
            echo "$key : $value <br>";
        }
    } else if (isset($_GET['choix']) && $_GET['choix'] === 'homme') {
        echo "<img src=\"sources/images/player.png\" alt=\"Homme\">";
        foreach ($tabHomme as $key => $value) {
            echo "$key : $value <br>";
        }
    }

    // }
    ?>
</div>

<?php

include("common/footer.php");
?>