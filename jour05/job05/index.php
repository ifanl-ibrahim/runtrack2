<?php

function occurrences($str,$char){
    $cont=0;
    for($i=0;isset($str[$i]);$i++){
        if($str[$i]==$char){
            $cont=$cont+1;
        }      
}
return $cont;
}
echo "<h1> Kaizoku </h1>";
echo 'Il y a '.occurrences("kaizoku","k"). ' occurrences';

?>