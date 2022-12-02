<?php
    if(isset($_POST['HP']) && isset($_POST['ATK']) && isset($_POST['DEF']) && isset($_POST['SPATK']) && isset($_POST['SPDEF']) && isset($_POST['SPEED'])){
        $hp = $_POST["HP"];
        $atk = $_POST["ATK"];
        $def = $_POST["DEF"];
        $spatk = $_POST["SPATK"];
        $spdef = $_POST["SPDEF"];
        $speed = $_POST["SPEED"];
    }

    $csv = array_map('str_getcsv', file('../data/pokedex.csv')); //tutto il csv in un array
    //visualizza il csv
    print_r($csv); //visualizzi array associativo
    implode($csv[1]); //trasforma array in stringa
    
    /*
    function linecsv(){
        global $all_dim;
        $all_dim = array();
        foreach($csv as $line) {
            formula($line[5], $line[6], $line[7], $line[8], $line[9], $line[10], $all_dim);
        }
        ricerca($all_dim, $csv);
    } */


    function pokselection ($hp, $atk, $def, $spatk, $spdef, $speed, $all_dim){
        //formula euclidea
        $in1 = ($_POST["HP"] - $hp);
        $in2 = ($_POST["ATK"] - $atk);
        $in3 = ($_POST["DEF"] - $def);
        $in4 = ($_POST["SPATK"] - $spatk);
        $in5 = ($_POST["SPDEF"] - $spdef);
        $in6 = ($_POST["SPEED"] - $speed);
        $out1 = pow($in1, 2);
        $out2 = pow($in2, 2);
        $out3 = pow($in3, 2);
        $out4 = pow($in4, 2);
        $out5 = pow($in5, 2);
        $out6 = pow($in6, 2);
        $result = sqrt($out1+$out2+$out3+$out4+$out5+$out6);
        //inserisco i risultati nell'array
        array_push($all_dim, $result);
        return $result;
    }

    function printPok($id, $nome,$gen,$tipo1,$tipo2,$hp,$atk,$def,$spatk,$spdef,$speed){
        echo 
        " <div class='cardcontainer'>
            <div class='container2'>
                <div class='imgcontainer'>
                    <img class='cardimg' src='../static/img/$id.png' alt='Immagine di: $nome'>
                </div>
                <div class='statscontainer'>
                    <h3 class='cardtitle'>$nome</h3>
                    <p class='regular bold'>Gen. $gen</p>
                    <p class='regular bold'>Tipi: <span class=''>$tipo1, $tipo2</span></p>
                    <div class='cardspecific'>
                        <div>
                            <p>HP <span class='regular bold'>$hp</span></p>
                            <p>Atk <span class='regular bold'>$atk</span></p>
                            <p>Def <span class='regular bold'>$def</span></p>
                        </div>
                        <div>
                            <p>Sp. Atk <span class='regular bold'>$spatk</span></p>
                            <p>Sp. Def <span class='regular bold'>$spdef</span></p>
                            <p>Speed <span class='regular bold'>$speed</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }


?>

