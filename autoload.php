<?php

function myLoad($name) {
    $nameSpace = "YYDH";
    $baseDir = "App";

    //$name = YYDH\Human
    if (strncmp($nameSpace, $name, strlen($nameSpace)) == 0) {
        $realName = substr($name, strlen($nameSpace));
        
        require $baseDir . str_replace("\\","/", $realName) . ".php";
    }
}

function gondrLoad($name) {
    $nameSpace = "Gondr";
    $baseDir = "Gondr";

    //$name = YYDH\Human
    if (strncmp($nameSpace, $name, strlen($nameSpace)) == 0) {
        $realName = substr($name, strlen($nameSpace));
        
        require $baseDir . str_replace("\\","/", $realName) . ".php";
    }
}

spl_autoload_register("myLoad");
spl_autoload_register("GondrLoad");