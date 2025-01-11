<?php
    //firstnames array
    $fnames=["max","lando","charles","oscar","carlos"];
    //lastnames array
    $lnames=["verstappen","norris","leclerc","piastri","sainz"];
    //team array
    $teams=["red bull","mclaren","ferrari","mclaren","ferrari"];
?>
<style>
    td{
        padding: 10px;
    }
</style>
<table border=1>
    <tr>
        <td><?php echo "firstname"; ?></td> <td><?php echo "lastname"; ?></td> 
        <td><?php echo "team"; ?></td>
    </tr>
    <?php
        for($i=0;$i<5;$i++){
            $randfn=$fnames[array_rand($fnames)];
            $randln=$lnames[array_rand($lnames)];
            $randteam=$teams[array_rand($teams)];
        }
    ?>
    <tr>
        <td><?php echo $randfn; ?></td><td><?php echo $randln; ?></td><td><?php echo $randteam; ?></td>
    </tr>
</table>
