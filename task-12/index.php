<?php
$path = './../';
$files = scandir($path);
$files = array_diff($files, array('.', '..'));
//var_dump($files); exit;

foreach ($files as $file) {
    if (is_dir($file)) {
        echo "<hr/>";
        echo "<b><a href='".path($file)."'>$file</a></b>";
        echo "<hr/>";
    } else {
        echo "<a href='$file'>$file</a>";
    }
    echo "<br/>";
}

function path($lin)
{
    if($lin=='\0' || $lin==0)
    {
        return;
    }
    $pathi = './../' . $lin;
        $filesi = scandir($pathi);
        $filesi = array_diff($filesi, array('.', '..'));
        foreach ($filesi as $filei) {
            if (is_dir($filei)) {
                echo "<hr/>";
                echo "<b><a href='$filei'>$filei</a></b>";
                echo "<hr/>";
            } else {
                
                "<a href='$filei'>$filei</a>";
            }
            echo "<br/>";
        }
}
