<?php
// asin — Arc sine. Returns the arc sine of num in radians. asin() is the inverse function of sin()
    $arg = 0.5;
    $val = asin($arg);
    echo "asin(" . $arg . ") = " . $val . " radians.<br/>";
    echo "Pi value = " . pi() . "<br/>";  
    echo "asin(" . $arg . ") = " . $val/pi()*180 . " degrees<br/>";

    $arg = 1;
    $val = asin($arg);
    echo "asin(" . $arg . ") = " . $val . " radians.<br/>";
    echo "Pi value = " . pi() . "<br/>";  
    echo "asin(" . $arg . ") = " . $val/pi()*180 . " degrees<br/>";
