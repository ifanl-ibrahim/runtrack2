<?php

var_dump($_POST);

$i=0;

foreach ($_POST as $value) {
    if ($value != '') {
        $i++;}  }

    if (isset($_POST["user"])) {
        echo 'il y a : '.$i.' argument(s) respecter';
}

?>

<form action="./index.php" method="Post">
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