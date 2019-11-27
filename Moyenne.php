<?php
include("common/header.php");
session_start();
?>
<h1>Calculer la Moyenne des notes</h1>

<div>
    <form action="#" method="GET">
        <label for="nombreNotes">Nombre de Note(s)</label>
        <input type="number" id="nombreNotes" name="nombreNotes">
        <input type="submit" value="Valider">
    </form>


    <?php
    // Récupération et validation de la donnée nombreNotes
    if (isset($_GET['nombreNotes']) && ((int) $_GET['nombreNotes']) > 0) {
        $nombreNotes = (int) $_GET['nombreNotes'];
        $_SESSION['nombreNotes'] = $nombreNotes;
        echo '<form action="#" method="POST"><br>';
        echo '<fieldset>';
        echo "<legend>Moyenne : </legend>";
        for ($nombre = 1; $nombre <= $nombreNotes; $nombre++) {
            echo "<label for=\"note" . $nombre . "\">Note  " . $nombre . "</label>";
            echo "<input type=\"number\" id=\"note" . $nombre . "\" name=\"note" . $nombre . "\" required>";
            echo "<br>";
        }

        echo "<input type=\"submit\" value=\"Calculer la moyenne\"><br>";
        echo '</fieldset>';
        echo "</form><br>";
    } else {
        echo "Choisir le nombre de note a entrer SVP";
    }
    if (isset($_POST['note1']) && ((int) $_POST['note1']) >= 0) {

        $somme = 0;
        for ($nombre = 1; $nombre <= $_SESSION['nombreNotes']; $nombre++) {
            $somme += (int) $_POST['note' . $nombre];
        }
        // echo "Somme : $somme" . "<br>";
        echo "Moyenne : " . $somme / $_SESSION['nombreNotes'];
    }

    ?>

</div>

<?php
include("common/footer.php");
?>