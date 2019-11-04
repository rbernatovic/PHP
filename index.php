<html>
    <head>
        <title>uzduotis</title>
        <?php 
$grizai_velai = rand(0,1);
$grizai_isgeres = rand(0,1);
if ($grizai_velai && $grizai_isgeres) {
    print 'Grizai velai ir isgeres';
}
if ($grizai_isgeres && !$grizai_velai) {
    print 'grizai isgeres';
}
if ($grizai_velai && !$grizai_isgeres) {
    print 'grizai velai';
}
if (!$grizai_velai && !$grizai_isgeres) {
    print 'nieko nepadarei';
}
?>
    </head>
    <body>
        <h1>Buitine skaiciuokle</h1>
    </body>
</html>

