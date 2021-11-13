<table border='13'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT salles.nom, etage.nom FROM salles INNER JOIN etage ON salles.id_etage = etage.id');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> nom des salles </th> <th> nom des étages </th>"; 

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>