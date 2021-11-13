<table border='3'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT `prenom`,`nom`,`naissance` FROM `etudiants` WHERE `sexe`="Femme"');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> prénom </th> <th> nom </th> <th> Naissance </th>";

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>