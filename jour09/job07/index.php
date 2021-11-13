<table border='7'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT SUM(`superficie`) FROM `etage`');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> superficie_totale </th>";

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>