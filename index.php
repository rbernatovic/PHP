<?php
     $distance = rand(100,1000);
     $consumption = 7.5;
     $price = 1.3;
     $fuel_total = round($distance * $consumption / 100, 2);
     $price_trip = round($fuel_total * $price, 2);
     
     $h1 = "Keliones skaiciuokle";
     $li_1 = "Nuvaziuota distancija: $distance";
     $li_2 = "Sunaudota $fuel_total l. kuro";
     $li_3 = "Kaina: $price_trip pinigu"
             
?>
<html>
    <head>
        <title>siuksles</title>
    </head>
    <body>
        <h1><?php print $h1?></h1>
        <ul>
            <li><?php print $li_1?></li>
            <li><?php print $li_2?></li>
            <li><?php print $li_3?></li>
        </ul>
    </body>
</html>
