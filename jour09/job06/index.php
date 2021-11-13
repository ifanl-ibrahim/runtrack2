<table border='6'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT COUNT(*) FROM `etudiants`');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> nb_etudiants </th>";

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>