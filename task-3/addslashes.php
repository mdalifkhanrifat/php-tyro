<?php
$str = "O'Reilly?";
eval("echo '" . addslashes($str) . "';");

echo "\n\n";

$str = "Is your name O'Reilly?";
echo addslashes($str);