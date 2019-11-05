<?php
$months = 12;
$wallet = 1000;
$month_income = 700;


for ($x = 1; $x <= $months; $x++) {
    $month_expenses = rand(600, 3000);
    if ($wallet > 0) {
        $wallet = $wallet + $month_income - $month_expenses;
    } else {
        break;
    }
}
$h1 = 'Wallet Forecast:';
$h2 = "Atsargiai, $x menesi gali baigtis pinigai!";
?>
<html>
    <head>
        <title>Uzd3</title>
    </head>
    <body>
        <h1><?php print $h1 ?></h1>
        <h2><?php print $h2 ?></h2>
    </body>
</html>
