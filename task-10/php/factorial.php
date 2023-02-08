<?php

function factorial($n)
{
    if ($n == 1 || $n == 0) {
        return 1;
    } else {
        return factorial($n - 1) * $n;
    }
}

/*

f1(x)= x + 1;


 f(1)= 1 *1     =  1

 f(2)= f(1) *2  =  2

 f(3)= f(2) *3  =  6

 f(4)= f(3) *4  =  24

*/
/*

!4= 4*!3
!6= 6*!5


*/