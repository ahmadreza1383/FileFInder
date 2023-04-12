<?php

spl_autoload_register(function($class)
{
    $class = str_replace('\\', '/', $class);
    
    require '..'.DIRECTORY_SEPARATOR.$class.'.php';
});