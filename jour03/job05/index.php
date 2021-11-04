<?php

$str = "on n'est pas le meilleur quand on le croit mais quand on le sait.";

$dic = array ("voyelles"=> ['a','i','o','u','y'],
             "consonnes"=> ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z']);

$cont1 = 0;
$cont2 = 0;

for($i= 0; isset($str[$i]); $i++); {

    for($y=0; isset($dic["voyelles"][$y]); $y++) {
        if($str[$i] = $dic["voyelles"][$y]) {
        $cont1++;}}

    for($x=0; isset($dic["consonnes"][$x]); $x++) {
        if($str[$i] = $dic["consonnes"][$x]) {
        $cont2++;}}
    }
?>        

<html>
    
    <body>
        <header>
            <?php echo $str."<br><br>" ?>
            <table border=3>
                <tr>
                    <th>voyelles</th>
                    <th>consonnes</th>
                </tr>
        </header>
        <main>
                <tr>
                    <td><?php echo $cont1; ?></td>
                    <td><?php echo $cont2; ?></td>
                </tr>
                
            </table>
        </main>
    </body>
 
</html>