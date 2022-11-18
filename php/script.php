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
    foreach($rows as $row) {            //separazione delle colonne in un array di stringhe
        $columns = explode(',', $row);
    ?>
        <div class="pokemonCard">
        <?php           
            print($columns[1] . "\t"); // nome
            print($columns[2]); // tipo principale

            /*
            foreach($columns as $col){      //ciclare per stampare tutte le categorie del pokedex 
                print($col);
            }
            */
        ?>
        </div>
    <?php
    }
    ?>
</div>
</body>
</html>

