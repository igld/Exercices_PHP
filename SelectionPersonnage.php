<?php
include("common/header.php");
?>
<h1>Sélection du personnage</h1>

<div>
    <form method="get" action="#">
        <label for="choix">Personnage : </label>
        <select name="choix" id="choix">
            <option value="femme">Femme</option>
            <option value="homme">Homme</option>
        </select>
        <input type="submit" value="Valider" />
    </form>


    <?php
    // Récupération et validation de la donnée nombreNotes
    // if (isset($_GET['choix'])) {
    // echo $_GET['choix'];
    if (isset($_GET['choix']) && $_GET['choix'] === 'femme') {
        echo '<img src="sources/images/playerF.png" alt="Femme">';
    } else {
        echo "<img src=\"sources/images/player.png\" alt=\"Homme\">";
    }
    // }
    ?>

</div>

<?php
include("common/footer.php");
?>