<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <title>Gotta Catch'em All 7</title>
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
<section class="container">
<div class="title">
            <h1>
                Gotta Check'em All
            </h1>
        </div>
        <div class="subtitle">
            <h3>
                <span>Benvenuto</span> nel tuo motore di ricerca per pokémon. Potrai inserire le caratteristiche di un <span>pokémon fittizio</span> e il back-end cercherà grazie all'algoritmo di Machine Learning <span>KNN (K-Nearest Neighbors)</span>  i 5 pokémon piu simili a quello che hai inserito.
            </h3>
        </div>

        <form action="../index.php" method="post" id="myForm">
            <div id="grid">
                <div class="fielcontainer">
                    <label class="fieldlabel">Punti Vita (HP): </label>
                    <input class="fieldinput" type="text" name="HP" placeholder="Inserisci un numero da 0 a 300">
                </div>
                <div class="fielcontainer">
                    <label class="fieldlabel">Punti Attacco (Attack): </label>
                    <input class="fieldinput" type="text" name="AK" placeholder="Inserisci un numero da 0 a 300">
                </div>
                <div class="fielcontainer">
                    <label class="fieldlabel">Punti Difesa (Defense): </label>
                    <input class="fieldinput" type="text" name="DP" placeholder="Inserisci un numero da 0 a 300">
                </div>
                <div class="fielcontainer">
                    <label class="fieldlabel">Punti Attacco speciale (Sp. Atk): </label>
                    <input class="fieldinput" type="text" name="SP" placeholder="Inserisci un numero da 0 a 300">
                </div>
                <div class="fielcontainer">
                    <label class="fieldlabel">Punti Difesa Speciale (Sp. Defense): </label>
                    <input class="fieldinput" type="text" name="DEF" placeholder="Inserisci un numero da 0 a 300">
                </div>
                <div class="fielcontainer">
                    <label class="fieldlabel">Punti Velocità (Speed): </label>
                    <input class="fieldinput" type="text" name="SPEED" placeholder="Inserisci un numero da 0 a 300">
                </div>
            </div>
            <div>
                <button type="submit" id="btnsubmit">Cerca</button>
            </div>
    

        </form>

        <div class="card">
            <div class="cardpic">
                <img src="../static/img/caterpie.png" alt="caterpie">
            </div>
            <div class="description">
                <div class="cardtitle">
                    <h5>
                        Caterpie
                    </h5>
                </div>
                <div class="cardgen">
                    <span class="regular">
                        Gen. 1
                    </span>
                </div>
                <div class="cardtype">
                    <span class="regular">
                        tipi: <span class="bold">insetto</span>
                    </span>
                </div>
                <div class="cardspecific">
                    <span class="regular">
                        HP: <span class="bold">30</span>
                    </span>
                    <span class="regular">
                        Atk: <span class="bold">30</span>
                    </span>
                    <span class="regular">
                        Def: <span class="bold">30</span>
                    </span>
                    <span class="regular">
                        Sp. Atk: <span class="bold">30</span>
                    </span>
                    <span class="regular">
                        Sp. Def: <span class="bold">30</span>
                    </span>
                    <span class="regular">
                        Speed: <span class="bold">30</span>
                    </span>
                </div>
            </div>
            
        </div>
</section>
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

    
    <script src="assets/js/script.js"></script>
</body>
</html>