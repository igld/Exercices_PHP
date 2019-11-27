<?php
include("common/header.php");
?>
<h1>Calculer la Moyenne des notes</h1>

<div>
    <form action="#" method="GET">
        <label for="nombreNotes">Nombre de Note(s)</label>
        <input type="number" id="nombreNotes" name="nombreNotes">
        <input type="submit" value="Valider">
    </form>


    <?php
    if (isset($_GET['nombreNotes']) && ((int) $_GET['nombreNotes']) > 0) {
        echo (int) $_GET['nombreNotes'];
    }
    ?>

</div>

<?php
include("common/footer.php");
?>