<?php
include_once 'index.php';

if (isset($_GET['number1'])) {
    $number1 = $_GET['number1'];
} else {
    $number1 = 0;
}

if (isset($_GET['number2'])) {
    $number2 = $_GET['number2'];
} else {
    $number2 = 0;
}

if (isset($_GET['operation'])) {
    $operation = $_GET['operation'];
} else {
    $operation = '+';
}

if (is_numeric($number1) && is_numeric($number1)) {
    if ($operation === '+') {
        $result = $number1 + $number2;
    } elseif ($operation === '-') {
        $result = $number1 - $number2;
    } elseif ($operation === '*') {
        $result = $number1 * $number2;
    } elseif ($operation === '/') {
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            $result = 'Unexpected Value';
        }
    } elseif ($operation === '%') {
        $result = $number1 % $number2;
    } else {
        $result = 0;
    }
} else {
    $result = "Input must be Numeric";
}
