<?php
//chr — Generate a single-byte string from a number

// Assumes the string will be used as ASCII or an ASCII-compatible encoding
$str = "The string ends in escape: ";
$str .= chr(67); /* add an escape character at the end of $str */
/* Often this is more useful */
echo $str.PHP_EOL;
$str = sprintf("The string ends in escape: %s", $str); // not clear 
echo $str.PHP_EOL;

echo chr(-159), chr(833), PHP_EOL; // not clear chr(....)

$str = chr(240) . chr(159) . chr(144) . chr(152);
echo $str;

