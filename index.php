<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'pokemon.php';
    $sasha = new Pokemon ('Sasha', 180, 180, 50, 'Eau');
    $norman = new Pokemon ('Norman', 500, 500, 20, 'Sol');
    $tinkatink = new Pokemon('Tinkatink', 200, 200, 25,'Acier');
    $rondoudou = new Pokemon('Rondoudou', 300, 300, 10, 'Fée');
    $rondoudou->pokedex();
    $tinkatink->pokedex();
    include 'function.php';
    arena($sasha,$tinkatink);
    ?>
</body>
</html>