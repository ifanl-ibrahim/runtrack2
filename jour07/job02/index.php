<php?

setcookie('nbvisites', 'nbvisites', time()+60*60*24);
header("Location:  http://localhost/runtrack2/jour07/job02/"  . $_SERVER["SERVER_NAME"] . "/enter.php");

var_dump(setcookie);

?>

<form action="#" method="post">
    <input type="submit" value="Reset" id="nbvisites" name="nbvisites">
</form>