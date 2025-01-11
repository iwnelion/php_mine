<?php
    $i=0;
    do{
        $z1=mt_rand(-100,100);
        $p1[]=$z1;
        $i++;
    }while($i<=10);
    foreach($p1 as $n){
        echo $n." ";
    }
    $max=max($p1);
    $min=min($p1);
    echo "<br> max: $max, min: $min";
?>
