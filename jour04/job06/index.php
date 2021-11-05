<?php

var_dump($_GET);

if ($_GET["nombre"] % 2 == 0) {
    echo "Nombre pair";}

else {
    echo "Nombre impair";
}

?>

<form method="get">
<input type="text" name="nombre">
<input type="submit" name="submit">
</form>
