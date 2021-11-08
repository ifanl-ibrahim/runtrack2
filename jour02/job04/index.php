<?php

    for ($chiffre = 0; $chiffre <=100; $chiffre++) {
        if ($chiffre % 3==0 && $chiffre % 5==0) {
            echo 'FizzBuzz'.'<br>';}
        
        elseif ($chiffre % 3==0) {
            echo 'Fizz'.'<br>';}
        
        elseif ($chiffre % 5==0) {
            echo 'Buzz'.'<br>';}
        
        else echo $chiffre.'<br>';}
        
?>