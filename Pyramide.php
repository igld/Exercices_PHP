<?php
include("common/header.php");
?>
<h1>Affichage d'une pyramide</h1>

<form action="#" method="GET">
    <label for="hauteur">Hauteur de la pyramide</label>
    <input type="number" name="hauteur" id="hauteur">
    <input type="submit" value="Valider">
</form>

<?php
if(isset($_GET['hauteur']) && $_GET['hauteur'] >=0){
$hauteur = $_GET['hauteur'];
echo "Pour une hauteur de : $hauteur *". "<br> <br>";
$compteur = $hauteur;
for($i=0; $i<=$hauteur-1; $i++){
    AfficheEtoile($i);
}

//déscente
for($i=$hauteur-2; $i>=0; $i--){
    $d=abs($i);
    AfficheEtoile($d);
}
}
else{
    echo "<h2>Entrez un nombre d'étoile(s) SVP (un entier positif)</h2>";
}

function AfficheEtoile($nbreEtoile){
    for($i=0; $i<=$nbreEtoile; $i++){
        echo "*";
    }
    echo "<br>";
}


?>


<?php
include("common/footer.php");
?>