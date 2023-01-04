<?php
include_once 'index.php';

if (isset($_GET['operation'])) {
    $level =  $_GET['operation'];
} else {
    $level = null;
}

if (isset($_GET['gpa'])) {
    $cgpa = $_GET['gpa'];
} else {
    $cgpa = 0.0;
}



$grade = convertgrade($cgpa, $level);


function convertgrade(float $gpa, $level)
{
    if ( (strtoupper( $level ) === "HSC"  || strtoupper($level) === "JSC" || strtoupper($level) === "SSC") && is_numeric($gpa)) {

        if ($gpa > 5.0 || $gpa < 0) {
            return 'You have provided wrong grade point.';
        } elseif ($gpa == 5.0) {
            return 'Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.';
        } else if ($gpa >= 4.0 && $gpa <= 4.9) {
            return "You have been passed with grade 'A'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 3.5 && $gpa <= 3.9) {
            return "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 3.0 && $gpa <= 3.4) {
            return "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 2.0 && $gpa <= 2.9) {
            return "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 1.0 && $gpa <= 1.9) {
            return "You have been passed with grade 'D'. Forget the mistakes, Remember the lessons";
        } else {
            return "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success";
        }
    } 
    else if( (strtoupper( $level ) === strtoupper("Graduation") || strtoupper($level) === strtoupper("Masters") ) && is_numeric($gpa))
    {
        if ($gpa > 4.0 || $gpa < 0) {
            return 'You have provided wrong grade point.';
        } else if ($gpa == 4.0) {
            return 'Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.';
        } else if ($gpa >= 3.75 && $gpa <= 3.9) {
            return "You have been passed with grade 'A'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 3.50 && $gpa <= 3.74) {
            return "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 3.25 && $gpa <= 3.49) {
            return "You have been passed with grade 'B+'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 3.0 && $gpa <= 3.24) {
            return "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 2.75 && $gpa <= 2.9) {
            return "You have been passed with grade 'B-'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 2.50 && $gpa <= 2.74) {
            return "You have been passed with grade 'C+'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 2.25 && $gpa <= 2.49) {
            return "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons";
        } else if ($gpa >= 2.0 && $gpa <= 2.24) {
            return "You have been passed with grade 'D'. Forget the mistakes, Remember the lessons";
        } 
        else {
            return "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success";
        }
    }
}
