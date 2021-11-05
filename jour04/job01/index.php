<?php

var_dump($_GET);

$count = 0;

for($i= 0; isset($_GET[$i]); $i++) {
    
    echo 'il y a : '.$_GET["passeword"].' argument(s) respecter'; 
    $count++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="index.php" method="GET">
        <p>Bonjour</p>
        <input type="texte" placeholder="Nom d'utilisateur">
        <input type="texte" placeholder="passeword">
        <input type="submit" value="se connecter"><br><br>
        <p>Je reconnais les conditions de l'utilisations <br><br>
            <input type="radio" name="bouton" id="oui">
            <label for="oui">Oui</label>
            <input type="radio" name="bouton" id="non">
            <label for="non">Non</label>
    </form>

</body>

</html>