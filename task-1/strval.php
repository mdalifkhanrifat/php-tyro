<?php
class StrValTest
{
    public function __toString()
    {
        return __CLASS__;
    }
}

// Prints 'StrValTest' ***No clear**
echo strval(12+12);

?>