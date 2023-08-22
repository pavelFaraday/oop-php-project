<?php

// spl_autoload_register is a function in PHP that is used for registering custom autoloaders. Autoloaders in PHP are functions that are automatically called when a class or interface is used in the code but hasn't been defined yet. The autoloader's responsibility is to locate and include the appropriate file that contains the class or interface definition.

function classAutoLoader($class)
{
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if (is_file($the_path) && !class_exists($class)) {
        include $the_path;
    } else {
        die("File name {$class}.php was not found.");
    }
};

spl_autoload_register('classAutoLoader');
