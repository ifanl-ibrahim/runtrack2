<?php

$tableau = [200, 204, 173, 98, 171, 404, 459];

// var_dump ($tableau);

$i=0;

while (isset($tableau[$i])) {

    if ($tableau[$i] % 2 == 0) {
        echo $tableau[$i].' est paire'.'<br>'; 
     }

     else {
         echo $tableau[$i].' est impaire'.'<br>'; }

    $i++;
}
?>