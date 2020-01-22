<?php

function autoload($classname){
    $dir = __DIR__;
    
    $dir = substr($dir, 0, strpos($dir, "Core"));
    
    if(is_int(strpos($classname, "Core")) != TRUE)
    {
        $dire = $dir . "src/" . $classname . ".php";
    } else {
        $dire = $dir . $classname . ".php";
    }
    
    $dires = str_replace("\\", "/", $dire);
    
    // echo $dires . "<br/>";
    
    include_once($dires);
}

spl_autoload_register ('autoload');

   
