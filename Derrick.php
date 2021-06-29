<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Derrick Generator</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./Derrick.css">
    
</head>

<div class='imagegauche'>DERRICK GENERATOR 30000</div>

<body class="body">

<?php
    require "./data.php"; ?>

<div class='imagegauche'><h2>"La prochaine fois t'oublieras pas tes balises spoilers, scélérat !" - Inspecteur Derrick, 1984.</h2></div>

<div class='droite'>
<h1>Derrick Generator</h1>



<button class ="button" onClick="window.location.reload();">Cliques ici si l'épisode ne te convient pas</button>

<h4> Episode <?php echo rand(1,500); ?>: <?php echo $titre1array[$keytitre1] ?> <?php echo $titre2array[$keytitre2] ?> </h4>

<p><?php  echo $part1array[$keypart1]?> <?php  echo $part2array[$keypart2]?> <?php  echo $part3array[$keypart3]?></p>


<footer>Ce truc parfaitement inutile a été crée par le plus abruti des Valkyries</footer>

</div>

</body>


</html>