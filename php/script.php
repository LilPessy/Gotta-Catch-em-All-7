<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acquisizione Pokedex</title>
</head>
<body>

<?php

//acquisizione del file
$filename = 'pokedex.csv';
$path = '../data/';
$file = $path . $filename;

//controllo
if(!is_readable($file)) {
    die('File non leggibile o non presente');
}
$rows = file($file);

?>
<div class="pokemonList">
    <?php
    $pokedex = [];
    foreach($rows as $row) {     
                                   //separazione delle colonne in un array di stringhe
        array_push($pokedex, $row);
    }
    array_splice($pokedex, 0, 1); //toglie l'intestazione

    //echo($pokedex[0]);

    foreach($pokedex as $pokemon) {     
                                  //qui farai l'array associativo
                                  $value = explode(",", $pokemon);
                                  echo($value[2]);
    }

    ?>
        <div class="pokemonCard">
        <?php           
            /*print($columns[1] . "\t"); // nome
            print($columns[2]); // tipo principale
            print($columns[3]); // tipo principale
            print($columns[9]); // tipo principale*/
            //$array = [NameType 1Type 2TotalHPAttackDefenseSp. AtkSp. DefSpeedGenerationLegendary]
            
            /*foreach($columns as $col){      //ciclare per stampare tutte le categorie del pokedex 
                print($col);
            }*/
            
        ?>
        </div>
</div>

<div class="getForm">
    <?php
        //$hp = $_POST["HP"];

    ?>
</div>
</body>
</html>

