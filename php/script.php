<?php
    if(isset($_POST['HP']) && isset($_POST['ATK']) && isset($_POST['DEF']) && isset($_POST['SPATK']) && isset($_POST['SPDEF']) && isset($_POST['SPEED'])){
        $HP = $_POST["HP"];
        $ATK = $_POST["ATK"];
        $DEF = $_POST["DEF"];
        $SPATK = $_POST["SPATK"];
        $SPDEF = $_POST["SPDEF"];
        $SPEED = $_POST["SPEED"];
    }

    function readcsv(){
        $file = fopen("../data/pokedex.csv", "r");
        $data = array();
        while (($line = fgetcsv($file)) !== FALSE) {
            $data[] = $line;
        }
        fclose($file);     
        return $data; 
    }
    $csv = readcsv();
    print_r ($csv);
    echo "cazzo";
    
    
?>

