<?php
echo addcslashes('foo[ ]', 'A..z').PHP_EOL;
echo addcslashes("zoo['.']", 'z..A').PHP_EOL; 
// $escaped = addcslashes($not_escaped, "\0..\37!@\177..\377").PHP_EOL; // not claer understand 