<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require("objet4.php"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 4</title>
</head>
<body>
    <?php
    $personnage1 = new Perso("Tom"); 
    $personnage2 = new Perso("Pierre");
    
    echo "<p>Avant le combat:</p>";
    $personnage1->afficherInfos();
    $personnage2->afficherInfos();
    
    $personnage1->attaque($personnage2);
    
    echo "<p> Après le combat: </p>";
    $personnage1->afficherInfos();
    $personnage2->afficherInfos();
    
    ?>
</body>
</html>
