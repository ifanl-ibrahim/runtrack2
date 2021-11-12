<?php

$str = "super ! bon, j'ai gagner le Hackaton";

function leetspeak($str){

    for ($i=0;isset($str[$i]);$i++){

        if ($str[$i]=="a"){
            $str[$i]=4;

        }elseif ($str[$i]=="b"){
            $str[$i]=8;

        }elseif ($str[$i]=="e"){
            $str[$i]=3;

        }elseif ($str[$i]=="g"){
            $str[$i]=6;

        }elseif ($str[$i]=="l"){
            $str[$i]=1;

        }elseif ($str[$i]=="s"){
            $str[$i]=5;
            
        }elseif ($str[$i]=="t"){
            $str[$i]=7;
        }
    }
return $str;
}
echo "<h2> Phrase normal </h2> <br> $str <br> <h2> Phrase leetspeak </h2> <br>";
echo leetspeak($str);

?>