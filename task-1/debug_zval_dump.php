
<?php

$var = 'Hello';

$var .= " World";

$var1 = $var;

debug_zval_dump($var1);
echo PHP_EOL;
echo $var;
?>
