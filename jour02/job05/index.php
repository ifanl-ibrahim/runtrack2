<?php

for ($i = 2; $i <= 1000; $i++) {
    $conter = 0 ;    
    
    for ($j=1 ; $j <=$i ; $j++){
        
         if($i % $j ==0 ){
            $conter++;}}

        if($conter ==2){
         echo $i."<br>";}}

?>
