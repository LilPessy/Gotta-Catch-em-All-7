<?php>

//acquisizione del file
$filename = 'pokedex.csv';
$path = '../data/pokedex.csv';
$file = $path . $filename;

//controllo
if(!is_readable($file)) {
    die('File non leggibile o non presente');
}
$rows = file($file);

//separazione delle colonne in un array di stringhe
foreach($rows as $row) {
    $columns = explode(';', $row);
}