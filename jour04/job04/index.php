<?php

var_dump($_POST);

?>

<table>
    <?php 
foreach($_POST as $key =>$valeur ){ ?>
    <tr>
        <td><?=$key?></td>
        <td><?=$valeur?></td>
    </tr>
<?php }?>

</table>
<form method="post">
<input type="mailto" name="user">
<input type="password" name="pasword">
<input type="submit" name="submit">
</form>