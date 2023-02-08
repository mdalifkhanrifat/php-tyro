<?php
//acos — Arc cosine . Returns the arc cosine of num in radians. 
    $arg=0.5;
    $val=acos($arg);
    echo "acos(" . $arg . ") = " . $val . " radians.<br/>";
    echo "Pi value = " . pi() . "<br/>";   
    echo "acos(" . $arg . ") = " . $val/pi()*180 . " degrees<br/>";
