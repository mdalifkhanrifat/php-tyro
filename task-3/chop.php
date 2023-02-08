<?php
//This function is an alias of: rtrim().
// chop() is different than the Perl chop() function, which removes the last character in the string.

echo "<pre>";//without <pre> you cann't see desired output in your browser
echo chop("   Ramki   ");//right spaces are eliminated
echo chop("Ramkrishna", "a..z");
echo "</pre>";
