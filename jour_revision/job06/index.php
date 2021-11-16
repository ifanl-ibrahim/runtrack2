<!DOCTYPE html>
<html lang="en">
<head>
    <link1 rel='stylesheet' href='./style1.css'>
    <link2 rel="stylesheet" href="./style2.css">
    <link3 rel="stylesheet" href="./style3.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<header>
    Bonjours !
</header>

    <form action="#" method="GET">
        <select name = "style" placeholder="Choisie ton style">
        <option value = "style1.css"> style1 </option> 
        <option value = "2"> style2 </option> 
        <option value = "3"> style3 </option>
        </select>
        <input type="submit" value="Changer">
    </form>

<footer></footer>

</body>
</html>

<?php 

foreach ($_GET as $value) {
    if ($_GET["submit"] = "style1") {
        echo "<link1 rel='stylesheet' href='./style1.css'>";}  

    elseif ($_GET["submit"] = "style2") {
        echo '<a href="./style2.css"></a>';} 
    
    elseif ($_GET["submit"] = "style3") {
        echo '<a href="./style3.css"></a>';}
    }

?>