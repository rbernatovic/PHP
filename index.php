<?php
$petrol_in_tank = rand(1, 50);


$diesel_limit = ($petrol_in_tank + ($petrol_in_tank * 0.1)) * 0.1;
for ($i = 0; $i < 100; $i++) {
    if ($i > $diesel_limit) {
        break;
    }
}
$h1 = 'Pripylei dyzelio i benz. masina?';
$h2 = "Benzino buvo: $petrol_in_tank l";
$h3 = "Max dyzelio riba: $i l";
?>
<html>
    <head>
        <title>Petrol</title>
    </head>
    <body>
        <h1><?php print $h1 ?></h1>
        <h2><?php print $h2 ?></h2>
        <h3><?php print $h3 ?></h3>
    </body>
</html>
