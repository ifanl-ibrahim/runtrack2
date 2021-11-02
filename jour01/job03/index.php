<?php

$bool = true . false;
$entier = 132;
$caractères = 'Ibrahim';
$virgule = 1.32;

echo '
<html>
    
    <body>
        <header>
            <table border=2>
                <tr>
                    <th>type</th>
                    <th>nom</th>
                    <th>valeur</th>
                </tr>
        </header>
        <main>
                <tr>
                    <td>boléen</td>
                    <td>$ bool</td>
                    <td>'.$bool.'</td>
                </tr>
                <tr>
                    <td>entier</td>
                    <td>$ entier</td>
                    <td>'.$entier.'</td>
                </tr>
                <tr>
                    <td>chaîne de caractères</td>
                    <td>$ caractère</td>
                    <td>'.$caractères.'</td>
                </tr>
                <tr>
                    <td>nombre à virgule flottante</td>
                    <td>$ virgule</td>
                    <td>'.$virgule.'</td>
                </tr>
            </table>
        </main>
    </body>
 
</html>';

?>