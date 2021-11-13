<table border='2'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT `nom`, `capacite` FROM salles');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> Nom </th> <th> Capacité </th>";

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>