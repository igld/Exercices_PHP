<?php
include("common/header.php");
?>
<h1>Affichage des tables de multiplication</h1>

<div>
<form action="TablesDeMultiplication.php" method="GET">
<label for="nombre">Choisir un nombre</label>
<input type="number" id="nombre" name="nombre">
<input type="submit" value="Valider le nombre">
</form>
<?php



if(isset($_GET["nombre"]) && is_numeric($_GET["nombre"])){
    $nombre= (int)$_GET["nombre"];
//$nombre= (int)$nombre;

    echo "<h2> Table de $nombre</h2>";
    for($i=0; $i<=10; $i++){
        
        
        echo "$nombre X $i =  ". $nombre*$i . "<br>";
    
    }
}
else{ 
    echo "<h2>Choisir un nombre pour le calcul SVP</h2>";
}


?>
</div>

<?php
include("common/footer.php");
?>