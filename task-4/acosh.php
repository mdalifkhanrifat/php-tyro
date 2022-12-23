<?php

//acosh — Inverse hyperbolic cosine. Returns the inverse hyperbolic cosine of num, i.e. the value whose hyperbolic cosine is num.
    $x = 1;
    $y1 = acosh($x);
    echo "PHP function acosh(). acosh(" . $x . ") = " . $y1 . ".<br/>";
    $y2 = log($x + sqrt($x*$x -1));
    echo "By definition of acosh. acosh(" . $x . ") = " . $y2 . ".<br/>";

    $x = 10;
    $y1 = acosh($x);
    echo "PHP function acosh(). acosh(" . $x . ") = " . $y1 . ".<br/>";
    $y2 = log($x + sqrt($x*$x -1));
    echo "By definition of acosh. acosh(" . $x . ") = " . $y2 . ".<br/>";
