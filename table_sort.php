<?php
    $tsort[]="";
    for ($i=0; $i < 100; $i++) { 
        $z=mt_rand(0,1000);
        $tsort[$i]=$z;
        echo $tsort[$i]."  ";
    }
    echo "<br>---sort---<br>";
    sort($tsort);
    foreach($tsort as $ts){
        echo $ts."  ";
    }
?>
