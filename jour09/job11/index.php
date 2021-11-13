<table border='11'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT AVG(`capacite`) FROM `salles` ');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> Capacite moyenne des salles </th>"; 

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>