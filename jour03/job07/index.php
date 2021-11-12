<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$temp = "";

var_dump ($str);

for ($i = 0; isset($str[$i]); $i++) {

    $i = $str[$i];
    $str[$i] = $str[$i+1];
    $str[$i+1] = $temp; {

        if ( !isset($str[$i+1])) {

            $temp = $str[$i];
            $str[$i] = $str[0];
            $str[0] = $temps;
        }
        
    }
    echo $str;
}

?>