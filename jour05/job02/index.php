<?php

function bonjour($jour) {

    if($jour == true) {
        return "Bonjour";
    }

    elseif($jour == false) {
        return "Bonsoir";
    }
}

echo bonjour(false);

?>