<?php

// count_chars — Return information about characters used in a string

$data = "Two Ts and one F.";
foreach (count_chars($data, 1) as $i => $val)
{
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}
