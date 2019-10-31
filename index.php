<?php
     $bin_vol = 40;
     $bin_heap_vol = rand(1,100);
     $trash_per_day = 15;
     $visas = $bin_vol + $bin_heap_vol;
     $days = floor($visas / $trash_per_day); 
     
     $h1 = "Siuksliu prognoze";
     $p_1 = "Turima siuksline $bin_vol litru";
     $p_2 = "Zmona nieko nesako kol kaupas nevirsija $bin_heap_vol litru";
     $h3 = "Isvada: Nieko nedarysiu $days dienas";
?>
<html>
    <head>
        <title>siuksles</title>
    </head>
    <body>
        <h1><?php print $h1?></h1>
        <p><?php print $p_1?></p>
        <p><?php print $p_2?></p>
        <h3><?php print $h3?></h3>
    </body>
</html>
