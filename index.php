<?php
include("common/header.php");
?>


<h1>Index</h1>

<a href="POO/">POO</a>
<div>
    <form action="#" method="GET">
        <fieldset>
            <legend>Informations</legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="nom">Age :</label>
            <input type="number" name="age" id="age" required>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>
</div>

<?php
if (isset($_GET["nom"])) {
    echo "Ton Nom est : " . $_GET["nom"] . "<br>";
    if (isset($_GET["age"])) {
        echo "Tu as : " . $_GET["age"] . "an(s)";
    }
}

?>
<!-- <script src="main.js"> </script> -->

<?php
include("common/footer.php");
?>