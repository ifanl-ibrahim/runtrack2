<?php

for ($chiffre = 0; $chiffre <=100; $chiffre++) {
  if($chiffre == 42){
    echo 'La Plateforme_<br>';
}elseif( $chiffre <=20) {
    echo '<i>'.$chiffre.'</i> <br>';
}elseif($chiffre >= 25 && $chiffre <=50){
    echo "<u>$chiffre</u> <br>";

}else {
    echo $chiffre .'<br>';}

}

?>