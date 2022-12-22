<?php
function destroy_foo() 
{
   
    global $foo;
    unset($foo);

    
}

$foo = 'bar';
destroy_foo();
echo $foo . PHP_EOL;
echo PHP_EOL;

function foo(&$bar) 
{
    unset($bar);
    //$bar = "blah";
    echo "$bar\n";
}

$bar = 'something';
echo "$bar\n";

foo($bar);
echo "$bar\n";