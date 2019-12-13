<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- vers les infos CSS -->
    <link rel="stylesheet" href="exo2.css"/>
    <title>Exo2</title>
    <!-- <style>
        h1{
            background-color: blue
        }

    </style> -->
</head>

<body>
<h1>Formulaire</h1>
<form action="#" method="GET">
    <fieldset>
        <legend>Informations</legend>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <label for="nom">Age :</label>
        <input type="number" name="age" id="age" required>
    </fieldset>
    <label for="message">Meesage :</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <input type="submit" value="Envoyer">
</form>


<?php

if (isset($_GET["nom"])) {
    echo "Ton Nom est : " . $_GET["nom"] . "<br>";
    if (isset($_GET["age"])) {
        echo "Tu as : " . $_GET["age"] . "an(s)";
    }
}

?>


<h1 style="color:red">Coucou</h1>
<h1 class="titreBleu">David</h1>
<div class="backgroundColoRBlue">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate a, cumque nostrum dolores
        praesentium
        vitae dolorum obcaecati asperiores repellendus quo debitis et libero assumenda, provident aperiam error
        porro
        saepe!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate a, cumque nostrum dolores
        praesentium
        vitae dolorum obcaecati asperiores repellendus quo debitis et libero assumenda, provident aperiam error
        porro
        saepe!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate a, cumque nostrum dolores
        praesentium
        vitae dolorum obcaecati asperiores repellendus quo debitis et libero assumenda, provident aperiam error
        porro
        saepe!</p>
</div>
<img src="sources/images/26003279.jpeg" alt="David et son chat">

<input class="UpdateCouleur" type="button" value="ChangerCouleur">

<script src="main.js"></script>
</body>

</html>
