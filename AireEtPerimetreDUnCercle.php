<?php
include("common/header.php");
?>
<h1>Calcul de l'aire et du périmètre d'un cercle</h1>
<div>
    <form class="cercle" action="#" method="GET">
        <div>
            <label for="rayon">Rayon du cercle : </label>
            <input type="text" name="rayon" id="rayon">
        </div>

        <div>
            <label for="perimetre">Calcul du périmètre : </label>
            <input type="checkbox" name="perimetre" id="perimetre" value="true">
        </div>

        <div>
            <label for="aire">Calcul de l'aire : </label>
            <input type="checkbox" name="aire" id="aire" value="true">
        </div>


        <div>
            <input type="submit" value="Valider">
        </div>
    </form>


    <?php
    if (isset($_GET["rayon"]) && $_GET["rayon"] > 0 && isset($_GET["aire"]) && isset($_GET["perimetre"])) {
        $rayon = $_GET["rayon"];
        CalculPeriemtreDuCercle($rayon);
        CalculAireDuCercle($rayon);
    } elseif (isset($_GET["rayon"]) && $_GET["rayon"] > 0 && isset($_GET["aire"])) {
        $rayon = $_GET["rayon"];
        CalculAireDuCercle($rayon);
    } elseif (isset($_GET["rayon"]) && $_GET["rayon"] && isset($_GET["perimetre"])) {
        $rayon = $_GET["rayon"];
        CalculPeriemtreDuCercle($rayon);
    } else {
        echo "<h2>Sélectionnez un calcul SVP</h2>";
    }

    function CalculAireDuCercle($rayon)
    {
        // Calcul de l'aire d'un cercle = PI*R*R
        $aire = M_PI * $rayon * $rayon;
        echo "<h2>L'aire du cercle est de : $aire</h2>";
    }


    function CalculPeriemtreDuCercle($rayon)
    {
        $perimetre = 2 * M_PI * $rayon;
        echo "<h2>Le périmètre du cercle est de : $perimetre</h2>";
    }

    ?>

</div>

<?php
include("common/footer.php");
?>