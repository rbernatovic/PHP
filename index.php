<?php
     $paskola = (rand (1,100)); 
     $neveluoju = (rand (101,200)); 
     $veluoju = (rand (201,300)); 
     $skola = "Skolos skaiciuokle:";
     $jei_paemei = "Jei paemei $paskola";
     $du = "Su dviem kabanciais grazinsi $neveluoju";
     $vienas = "Su vienu kabanciu  grazinsi $veluoju";
?>
<html>
    <head>
        <title>skolos skaiciuokle</title>
    </head>
    <body>
        <div>
            <h1><?php print $skola?></h1>
            <h3><?php print $jei_paemei?></h3>
            <h3><?php print $du?></h3>
            <h3><?php print $vienas?></h3>
        </div>
    </body>
</html>
