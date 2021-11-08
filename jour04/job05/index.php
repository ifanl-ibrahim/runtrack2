<?php

// var_dump($_GET);
//je n'utilise pas GET car Get affiche les information de l'utilisateur dans le URL

if (isset(($_POST)["submit"])) {

    if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
        echo "C’est pas ma guerre"; }

    else {
        echo "Votre pire cauchemar"; }
}

?>

<form action="#" method="POST">
    <p>Bonjour</p>
    <input type="texte" name="username" placeholder="username">
    <input type="texte"  name="password" placeholder="password"><br><br>
    <input type="submit" value="se connecter">
</form>