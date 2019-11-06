<?php
$months = 24;
$car_price_new = 30000;
$car_price_used = $car_price_new;
$depreciation = 0.02;
$santaupos = 15000;


for ($i = 1; $i <= 100; $i++) {
    $car_price_used -= ($car_price_used * $depreciation);
    if ($car_price_used < 15000) {
        break;
    }
}
$car_price_used = round($car_price_used);
$depr_eur = $car_price_new - $car_price_used;
$depr_perc = round($depr_eur * 100 / $car_price_new, 1);


$h1 = 'Kiek nuvertes masina?';
$h2 = "Naujos masinos kaina: $car_price_new";
$h3 = "Masina galesi nusipirkti po $i men, kai jos verte bus $car_price_used eur";
$h4 = "Masina nuvertes $depr_perc proc.";
?>
<html>
    <head>
        <title>Petrol</title>
    </head>
    <body>
        <h1><?php print $h1 ?></h1>
        <h2><?php print $h2 ?></h2>
        <h3><?php print $h3 ?></h3>
        <h4><?php print $h4 ?></h4>
    </body>
</html>
