<?php
    $sum=0;
    do{
        $z=mt_rand(0,100);
        $p[]=$z;
    }while($z!=0);
    foreach ($p as $n){
        echo $n." ";
        $sum+=$n;
    }
    echo "sum: ".$sum;
?>
