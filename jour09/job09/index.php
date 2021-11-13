<table border='9'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT * FROM `salles` ORDER BY `salles`.`capacite` DESC');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> id </th> <th> nom </th> <th> id_etage </th> <th> capacite </th>"; 

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>