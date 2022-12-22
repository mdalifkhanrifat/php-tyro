<?php
$b = array(1, 1, 2, 3, 5, 8);

$arr = get_defined_vars();

// print $b
print_r($arr["b"]).PHP_EOL;

/* print path to the PHP interpreter (if used as a CGI)
 * e.g. /usr/local/bin/php */
echo $arr["_"].PHP_EOL;

// print the command-line parameters if any
print_r($arr["argv"]).PHP_EOL;

// print all the server vars
print_r($arr["_SERVER"]).PHP_EOL;

// print all the available keys for the arrays of variables
print_r(array_keys(get_defined_vars())).PHP_EOL;
