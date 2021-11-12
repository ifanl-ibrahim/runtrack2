
<form action="#" method="GET">
<label for="largeur">Largeur</label>
<input type="text" id="largeur" name="largeur">
<label for="hauteur">Hauteur</label>
<input type="text" id="hauteur" name="hauteur">
<input type="submit">
</form>
<?php

$largeur=0;
$hauteur=0;

foreach($_GET as $key=>$value){
    if($key=="largeur"){
        $largeur=$value;
          
    }
    elseif($key=="hauteur"){
        $hauteur=$value;
}}

?>
