<html>
    <head>
        <title>uzduotis</title>
        <?php
        $grizai_velai = rand(0, 1);
        $grizai_isgeres = rand(0, 1);
        if ($grizai_velai && $grizai_isgeres) {
            $situacija = 'Grizai velai ir isgeres';
        }
        if ($grizai_isgeres && !$grizai_velai) {
            $situacija = 'Grizai isgeres';
        }
        if ($grizai_velai && !$grizai_isgeres) {
            $situacija = 'Grizai velai';
        }
        if (!$grizai_velai && !$grizai_isgeres) {
            $situacija = 'Nieko nepadarei';
        }
        $Buitine_sk = 'Buitine skaiciuokle:';
        ?>

    </head>
    <body>
        <h1><?php print $Buitine_sk ?></h1>
        <p><?php print $situacija ?></p>
    </body>
</html>

