<?php
echo intval(42).PHP_EOL;                      // 42
echo intval(4.2).PHP_EOL;                     // 4
echo intval('42').PHP_EOL;                    // 42
echo intval('+42').PHP_EOL;                   // 42
echo intval('-42').PHP_EOL;                   // -42
echo intval(042).PHP_EOL;                     // 34
echo intval('042').PHP_EOL;                   // 42
echo intval(1e10).PHP_EOL;                    // 1410065408
echo intval('1e10').PHP_EOL;                  // 1
echo intval(0x1A).PHP_EOL;                    // 26
echo intval(42000000).PHP_EOL;                // 42000000
echo intval(420000000000000000000).PHP_EOL;   // 0
echo intval('420000000000000000000').PHP_EOL; // 2147483647
echo intval(42, 8).PHP_EOL;                   // 42
echo intval('42', 8).PHP_EOL;                 // 34         ****I can't clear undersant*****
echo intval(array()).PHP_EOL;                 // 0
echo intval(array('foo', 'bar')).PHP_EOL;     // 1
echo intval(false).PHP_EOL;                   // 0
echo intval(true).PHP_EOL;                    // 1
?>
