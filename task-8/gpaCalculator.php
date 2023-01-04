<?php
include_once 'index.php';

if (isset($_GET['operation'])) {
    $operation =  $_GET['operation'];
} else {
    $operation = 'null';
}

if (isset($_GET['operation2'])) {
    $operation2 = $_GET['operation2'];
} else {
    $operation2 = 'null';
}


if ($operation2==="Scienc"){
    if (isset($_GET['Physics'])) {
        $Physics = $_GET['Physics'];
    } else {
        $Physics = 'null';
    }
    if (isset($_GET['Chemistry'])) {
        $Chemistry = $_GET['Chemistry'];
    } else {
        $Chemistry = '010';
    }
    if (isset($_GET['Biology'])) {
        $Biology = $_GET['Biology'];
    } else {
        $Biology = '010';
    }
    $point = array("Physics"=> convertGpa($Physics, $operation), "Chemistry"=> convertGpa($Chemistry, $operation), "Biology"=> convertGpa($Biology, $operation));
    $grade = array("Physics"=> convertGpa($Physics, $operation), "Chemistry"=> convertGpa($Chemistry, $operation), "Biology"=> convertGpa($Biology, $operation));
    


}

function convertGpa($gpa, $level)
{
    if($gpa >= 80 && $gpa >=100)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return 5.0;
        }
        else if($level === 'Graduation' || $level === 'Masters' )
        {
            return 4.0;
        }
        else
        {
            return 0.0;
        }
    }

    else if($gpa >= 70 && $gpa >=79)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return 4.0;
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=70 && $gpa>=74))
        {
            return 3.50;
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=75 && $gpa>=79) )
        {
            return 3.75;
        }
        else
        {
            return 0.0;
        }
    }

    else if($gpa >= 60 && $gpa >=69)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return 3.50;
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=60 && $gpa>=64))
        {
            return 3.0;
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=65 && $gpa>=69) )
        {
            return 3.25;
        }
        else
        {
            return 0.0;
        }
    }
    else if($gpa >= 50 && $gpa >=59)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return 3.0;
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=50 && $gpa>=54))
        {
            return 2.50;
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=55 && $gpa>=59) )
        {
            return 2.75;
        }
        else
        {
            return 0.0;
        }
    }

     else if($gpa >= 40 && $gpa >=49)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return 2.0;
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=40 && $gpa>=44))
        {
            return 2.0;
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=45 && $gpa>=49) )
        {
            return 2.25;
        }
        else
        {
            return 0.0;
        }
    }

    else if($gpa >= 33 && $gpa >=39)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return 1.0;
        }
        else if(($level === 'Graduation' || $level === 'Masters'))
        {
            return 0.0;
        }
        else
        {
            return 0.0;
        }
    }
    else{
        return 0.0;
    }
}


function grade($gpa, $level)
{
    if($gpa >= 80 && $gpa >=100)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return "A+";
        }
        else if($level === 'Graduation' || $level === 'Masters' )
        {
            return "A+";
        }
        else
        {
            return 0.0;
        }
    }

    else if($gpa >= 70 && $gpa >=79)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return "A";
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=70 && $gpa>=74))
        {
            return "A-";
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=75 && $gpa>=79) )
        {
            return "A";
        }
        else
        {
            return "N";
        }
    }

    else if($gpa >= 60 && $gpa >=69)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return "A-";
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=60 && $gpa>=64))
        {
            return "B+";
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=65 && $gpa>=69) )
        {
            return "A-";
        }
        else
        {
            return 0.0;
        }
    }
    else if($gpa >= 50 && $gpa >=59)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return "B";
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=50 && $gpa>=54))
        {
            return "C+";
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=55 && $gpa>=59) )
        {
            return "B-";
        }
        else
        {
            return 0.0;
        }
    }

    else if($gpa >= 40 && $gpa >=49)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return "C";
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=40 && $gpa>=44))
        {
            return "D";
        }
        else if(($level === 'Graduation' || $level === 'Masters') && ($gpa>=45 && $gpa>=49) )
        {
            return "C";
        }
        else
        {
            return 0.0;
        }
    }

    else if($gpa >= 33 && $gpa >=39)
    {
        if($level === 'JSC' || $level === 'HSC' || $level === 'SSC')
        {
            return 1.0;
        }
        else if(($level === 'Graduation' || $level === 'Masters'))
        {
            return "F";
        }
        else
        {
            return "N";
        }
    }
    else{
        return "F";
    }
}


