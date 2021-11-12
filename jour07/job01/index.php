<?php

session_start();

foreach($_POST as $key=>$value){
    $value=0;
    $_SESSION['nbvisites']=$value;

if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']=$_SESSION['nbvisites']+1;
}

else{
    session_destroy();
    $_SESSION['nbvisites']=0;
}}

echo $_SESSION['nbvisites'];

var_dump($_SESSION);

?>

<form action="#" method="post">
    <input type="submit" value="Reset" id="nbvisites" name="nbvisites">
</form>
