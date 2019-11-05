<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($x = 1; $x <= $kates; $x++) {
    for ($y = 1; $y <= $sunys; $y++) {
        $pavyko = rand(0, 1);
        if ($pavyko) {
            $katasuniai++;
            break;
        }
    }
}
$h1 = 'Katasuniu iseiga';
$h2 = "Dalyvavo $kates kates ir $sunys sunys";
$h3 = "Katasuniu iseiga: $katasuniai katasuniai";
?>
<html>
    <head>
        <title>ciklas</title>
    </head>
    <body>
        <h1><?php print $h1 ?></h1>
        <h2><?php print $h2 ?></h2>
        <h3><?php print $h3 ?></h3>
    </body>
</html>
