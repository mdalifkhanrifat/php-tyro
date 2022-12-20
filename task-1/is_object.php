<?php

// Declare a simple function to return an
// array from our object
function get_students($obj)
{
    if (!is_object($obj)) {
        return false;
    }

    return $obj->students;
}

// Declare a new class instance and fill up
// some values
$obj = new stdClass();
$obj2 = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');
$obj2->students = "hello";

var_dump(get_students(null));
var_dump(get_students($obj));
var_dump(get_students($obj2));
