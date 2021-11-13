<table border='5'>

<?php

$bdd = mysqli_connect('localhost','root','','jour08');

$req = mysqli_query($bdd,'SELECT * FROM `etudiants` WHERE `naissance` > "2003-31-12"');

$res = mysqli_fetch_all($req);

// var_dump($res);

echo "<th> Id </th> <th> prenom </th> <th> nom </th> <th> naissance </th> <th> sexe </th> <th> email </th>";

foreach($res as $key=>$values) {
    echo "<tr>";
    foreach($values as $key=>$value){
        echo "<td> $value </td>";

    }
    echo "</tr>";
}

?>

</table>