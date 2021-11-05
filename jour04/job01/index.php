<?php

// var_dump($_GET);

$i=0;

foreach ($_GET as $value) {
    if ($value != '') {
        $i++;}  }

    if (isset($_GET["user"])) {
        echo 'il y a : '.$i.' argument(s) respecter';
}

?>

<form action="#" method="GET">
    <p>Bonjour</p>
    <input type="texte" name="user" placeholder="Nom d'utilisateur">
    <input type="texte"  name="passe" placeholder="passeword">
    <input type="submit" value="se connecter"><br><br>
     <p>Je reconnais les conditions de l'utilisations <br><br>
        <input type="radio" name="bouton" id="oui">
        <label for="oui">Oui</label>
        <input type="radio" name="bouton" id="non">
        <label for="non">Non</label>
</form>