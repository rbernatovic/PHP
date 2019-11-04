<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && !$grizai_isgeres) {
    $h2_result = 'Grįžai vėlai';
} else if ($grizai_velai && $grizai_isgeres) {
    $h2_result = 'Grįžai vėlai ir išgėręs';
} else if (!$grizai_velai && $grizai_isgeres) {
    $h2_result = 'Grįžai išgėręs';
} else { 
    $h2_result = 'Nieko nepadarei';
}
if (!$grizai_velai && !$grizai_isgeres) {
    $test = 'Miegosi';
} else {
    $test = 'Nemiegosi';
}
$h1 = 'Buitine skaiciuokle';
$h2 = "Situacija: $h2_result";
$h3 = "Isvada: $test and sofos"
?>
<html>
    <head>
        <title>Buitine skaiciuokle</title>
    </head>
    <body>  
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>
