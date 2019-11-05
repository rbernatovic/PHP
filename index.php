<?php
$x = rand(1, 100);

for ($y = 1; $y < 100; $y = $x) {
    break;
}
?>
<html>
    <head>
        <title>ciklas</title>
    </head>
    <body>
        <p><?php print "Tai yra $x - tasis ciklas"; ?></p>
    </body>
</html>
