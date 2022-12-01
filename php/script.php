<?php
    if(isset($_POST['HP']) && isset($_POST['ATK']) && isset($_POST['DEF']) && isset($_POST['SPATK']) && isset($_POST['SPDEF']) && isset($_POST['SPEED'])){
        $HP = $_POST["HP"];
        $ATK = $_POST["ATK"];
        $DEF = $_POST["DEF"];
        $SPATK = $_POST["SPATK"];
        $SPDEF = $_POST["SPDEF"];
        $SPEED = $_POST["SPEED"];
    }

    $csv = array_map('str_getcsv', file('../data/pokedex.csv')); //tutto il csv in un array
    //visualizza il csv
    print_r($csv); //visualizzi array associativo
    implode($csv[1]); //trasforma array in stringa
    
    function main(){
        global $all_dim;
        $all_dim = array();
        foreach($csv as $line) {
            formula($line[5], $line[5], $line[5], $line[5], $line[5], $line[5], $all_dim);
        }
        ricerca($all_dim, $csv);
    }
?>

