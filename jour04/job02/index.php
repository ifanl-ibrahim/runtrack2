<?php

var_dump($_GET);

?>

<table>
    <?php 
foreach($_GET as $key =>$valeur ){ ?>
    <tr>
        <td><?=$key?></td>
        <td><?=$valeur?></td>
    </tr>
<?php }?>

</table>
<form method="get">
<input type="mailto" name="user">
<input type="password" name="pasword">
<input type="submit" name="submit">
</form>