<table border='12'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `naissance` BETWEEN "1998-01-01" AND "2018-01-01"');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> prenom </th> <th> nom </th> <th> naissance </th>"; 

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>