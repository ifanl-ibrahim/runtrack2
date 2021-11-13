<table border='8'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT SUM(`capacite`) FROM `salles`');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> capacite_totale </th>";

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>