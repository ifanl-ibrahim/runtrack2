<?php

$str = "Les choses que l'on possede finissent par nous posseder.";

// var_dump ($str);

for ($i = -1; isset($str[$i]); $i--) {
    echo $str[$i];
} 

?>