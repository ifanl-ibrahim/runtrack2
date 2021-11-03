<?php

for ($chiffre = 0; $chiffre <=1337; $chiffre++){
    if ($chiffre == 26||$chiffre == 37||$chiffre == 88||$chiffre == 1111||$chiffre == 3233) // la suite de chiffre ne va que jusqu'à 1337 donc la dernière condition ne sera pas appliqué
    {echo '-'.'<br>' ;}
    else echo $chiffre.'<br>';}

?>