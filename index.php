<?php
     $bin_vol = 40;
     $bin_heap_vol = rand(1,100);
     $trash_per_day = 15;
     $visas = $bin_vol + $bin_heap_vol;
     $days = floor($visas / $trash_per_day);
     
             
?>
<html>
    <head>
        <title>siuksles</title>
    </head>
    <body>
        <h1>Siuksliu prognoze</h1>
        <p>Turima siuksline <?php print $bin_vol?> litru</p>
        <p>Zmona nieko nesako kol kaupas nevirsija <?php print $bin_heap_vol?></p>
        <h3>Isvada: Nieko nedarysiu <?php print $days?> dienu</h3>
    </body>
</html>
