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
$hauteur = $_GET['hauteur'];
echo $hauteur;
$compteur = $hauteur;
for($i=0; $i<$hauteur;$i++){
    
  
    
    
}



?>


<?php
include("common/footer.php");
?>