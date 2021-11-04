<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voy = "aeIouy";

// var_dump ($str);

for($i= 0; isset($str[$i]); $i++)
    for($y=0; isset($voy[$y]); $y++){
        if($str[$i] == $voy[$y]){
            echo $str[$i].'<br>';}
    }

?>