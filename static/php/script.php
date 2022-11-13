<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acquisizione Pokedex</title>
</head>
<body>

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
?>

<div> 
</div>
</body>
</html>

